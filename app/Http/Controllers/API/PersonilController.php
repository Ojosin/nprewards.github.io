<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\BaseException;


class PersonilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $result =  \App\Models\M_personil::
        with('provinsi','kabupaten')
        ->where('no_berkas',$request->no_berkas)
        ->where('no_kta',$request->no_kta)
        ->orderBy('id_personil','desc');
        if(!empty($request->q))
        {
            $result->where('nama','like','%'.$request->q.'%');
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
            'nama'=>'required',
            'kelahiran'=>'required',
            // 'tgl_lahir'=>'required',
        ]);

        $data = $request->all();
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['created_by'] = \Auth::user()->id;
        $save = \App\Models\M_personil::create($data);    

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
        return \App\Models\M_personil::find($id);
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
            'nama'=>'required',
            'kelahiran'=>'required',
            // 'tgl_lahir'=>'required',
        ]);


        \DB::beginTransaction();
        try {
            // update 
            $data = $request->all();
            $data['update_at'] = date('Y-m-d H:i:s');
            $data['update_by'] = \Auth::user()->id;;

            $update = \App\Models\M_personil::find($id);

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
        \App\Models\M_personil::find($id)->delete();

        return BaseException::jsonSuccessResponse();
    }

    public function print_personil(Request $request)
    {
        $path = public_path() . '/personil/personil_'.$request->id.'_'.date('Ymd').'.pdf';
        $data = [];

        $pdf = PDF::loadview('pdf.personil', $data);

        $pdf->save($path);
        return $pdf->download($path);
    }
}
