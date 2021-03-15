<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\BaseException;
use Barryvdh\DomPDF\Facade as PDF;



class DataAdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result =  \App\Models\M_data_administrasi::orderBy('id_data_administrasi','desc');
        if(!empty($request->q))
        {
            $result->where('nama_badan_usaha','like','%'.$request->q.'%');
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
            'tgl_aplikasi'=>'required',
            // 'no_berkas'=>'required',
            'no_registrasi_buk'=>'required',
            'tahapan'=>'required',
            'no_anggota_inkindo'=>'required',
            'nama_badan_usaha'=>'required',
            'kode_provinsi'=>'required',
            'kode_kabupaten'=>'required',
            'alamat'=>'required',
            'bentuk_bu'=>'required',
            'golongan_bu'=>'required',
            'kualifikasi_bu'=>'required',
            'status_sertifikasi'=>'required',
        ]);

        $data = $request->all();
        $data['no_berkas'] = $request->bentuk_bu.'-'.'1'.'-'.$request->kode_provinsi.'-'.$request->kode_kabupaten.'-'.$this->generate_no_urut();
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['created_by'] = \Auth::user()->id;
        $save = \App\Models\M_data_administrasi::create($data);    
            
    
        return response()->json(['status' => 'success']);
    }



    public function generate_no_urut()
    {
        $no_urut;
        $query = \App\Models\M_data_administrasi::
        where('no_berkas','like','%'.date('Y').'%') 
        ->first();
        if(!empty($query))
        {
            $get_employee = substr($query->no_berkas, -3);
            $max = ((int)$get_employee) + 1;
            return $no_urut =  date('Y').'-'.sprintf("%04s",$max);
        }
        else
        {
            return $no_urut =  date('Y').'-'."0001";
        }
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
        return \App\Models\M_data_administrasi::find($id);

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
       $this->validate($request,[
            'tgl_aplikasi'=>'required',
            // 'no_berkas'=>'required',
            'no_registrasi_buk'=>'required',
            'tahapan'=>'required',
            'no_anggota_inkindo'=>'required',
            'nama_badan_usaha'=>'required',
            'kode_provinsi'=>'required',
            'kode_kabupaten'=>'required',
            'alamat'=>'required',
            'bentuk_bu'=>'required',
            'golongan_bu'=>'required',
            'kualifikasi_bu'=>'required',
            'status_sertifikasi'=>'required',
        ]);

        \DB::beginTransaction();
        try {
            // update 
            $data = $request->all();
            $data['update_at'] = date('Y-m-d H:i:s');
            $data['update_by'] = \Auth::user()->id;;

            $update = \App\Models\M_data_administrasi::find($id);

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
        \App\Models\M_data_administrasi::find($id)->delete();

        return BaseException::jsonSuccessResponse();
    }

    public function cetak_sertifikat(Request $request)
    {
        $path = public_path() . '/sertifikat/sertifikat_'.$request->id.'_'.date('Ymd').'.pdf';
        $administrasi = \App\Models\M_data_administrasi::with('provinsi','kabupaten')->where('id_data_administrasi',$request->id)->first();
        $pengurus = \App\Models\M_pengurus::where('no_kta',$administrasi->no_kta)->where('no_berkas',$administrasi->no_berkas)->where('jabatan',1)->first();
        
        

        $data['pengurus'] = $pengurus;
        $data['administrasi'] = $administrasi;
       
        $pdf = PDF::
        setPaper([0, 0, 630.98, 1100.85], 'landscape')
        ->loadview('pdf.sertifikat', $data);

        $pdf->save($path);
        return $pdf->download($path);
    }
}
