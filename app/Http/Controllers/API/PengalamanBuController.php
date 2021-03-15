<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\BaseException;
use Barryvdh\DomPDF\Facade as PDF;


class PengalamanBuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $result =  \App\Models\M_pengalaman_bu::
        with('klasifikasi_sb','provinsi')
        ->where('no_berkas',$request->no_berkas)
        ->where('no_kta',$request->no_kta)
        ->orderBy('id_pengalaman_bu','desc');
        if(!empty($request->q))
        {
            $result->where('nama_paket','like','%'.$request->q.'%');
        }
        return $result->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'kode_sb'=>'required',
            'nama_paket'=>'required',
        ]);

        $data = $request->all();
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['created_by'] = \Auth::user()->id;
        $save = \App\Models\M_pengalaman_bu::create($data);    

        return response()->json(['status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return \App\Models\M_pengalaman_bu::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'kode_sb' => 'required',
            'nama_paket' => 'required',
        ]);

        \DB::beginTransaction();
        try {
            // update 
            $data = $request->all();
            $data['update_at'] = date('Y-m-d H:i:s');
            $data['update_by'] = \Auth::user()->id;;

            $update = \App\Models\M_pengalaman_bu::find($id);

            $update->update($data);

            \DB::commit();
            return BaseException::jsonSuccessResponse();
        } catch (\Exception $e) {
            \DB::rollback();
            return BaseException::jsonErrorResponse('1', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(!empty($id))
        {
            $data = \App\Models\M_pengalaman_bu::find($id);
            $data->delete();
            return BaseException::jsonSuccessResponse();
        }
        else
        {
            return BaseException::jsonErrorResponse('1','error');
        }
    }


    public function print_pengalaman_bu(Request $request)
    {
        $path = public_path() . '/pengalaman_bu/pengalaman_bu_'.$request->id.'_'.date('Ymd').'.pdf';
        $administrasi = \App\Models\M_data_administrasi::where('no_kta',$request->no_kta)->where('no_berkas',$request->no_berkas)->first();
        $pengalaman_bu = \DB::table('m_pengalaman_bu as a')
        ->selectRaw('b.kode_sb,b.keterangan,b.id_klasifikasi_sb,sum(nilai_kontrak_dibobotkan) as jumlah')
        ->leftJoin('klasifikasi_sb as b','b.id_klasifikasi_sb','a.kode_sb')
        ->leftJoin('m_provinsi as c','c.kode_provinsi','a.lokasi_proyek')
        ->where('no_kta',$request->no_kta)->where('no_berkas',$request->no_berkas)
        ->groupBy('b.kode_sb','b.keterangan','b.id_klasifikasi_sb')
        ->get();

        // $pengalaman_bu = \App\Models\M_pengalaman_bu::with('provinsi','klasifikasi_sb')
        // ->select('')
        // ->where('no_kta',$request->no_kta)->where('no_berkas',$request->no_berkas)
        // groupBy('')->get();
        
        // dd($pengalaman_bu[0]->klasifikasi_sb);
        $data['administrasi'] = $administrasi;
        $data['pengalaman_bu'] = $pengalaman_bu;

        $pdf = PDF::loadview('pdf.pengalaman_bu', $data);

        $pdf->save($path);
        return $pdf->download($path);
    }
}
