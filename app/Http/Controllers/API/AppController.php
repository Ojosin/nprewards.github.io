<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    //
    public function get_provinsi()
    {
        return \App\Models\M_provinsi::where('type_data','simjanokon')->get();
    }

    public function get_kabupaten(Request $request)
    {
        return \App\Models\M_kabupaten::where('kode_provinsi',$request->kode_provinsi)->where('type_data','simjanokon')->get();
    }
    
    public function get_bentuk_bu(Request $request)
    {
        return \App\Models\Bentuk_bu::all();
    }
    
    public function get_golongan_bu(Request $request)
    {
        return \App\Models\Golongan_bu::all();
    }
    
    public function get_kualifikasi_bu(Request $request)
    {
        return \App\Models\Kualifikasi_bu::all();
    }

    public function get_status_sertifikasi(Request $request)
    {
        return \App\Models\Status_sertifikasi::all();
    }
    
    public function get_jabatan(Request $request)
    {
        return \App\Models\M_jabatan::all();
    }


    public function get_pendidikan(Request $request)
    {
        return \App\Models\M_pendidikan::all();
    }


    public function get_negara(Request $request)
    {
        return \App\Models\M_negara::all();
    }

    public function get_negara_by_id(Request $request)
    {
        return \App\Models\M_negara::where('id_negara',$request->id_negara)->get();
    }


    public function get_pendidikan_by_id(Request $request)
    {
        return \App\Models\M_pendidikan::where('id_pendidikan',$request->id_pendidikan)->get();
    }



    public function get_bentuk_bu_by_id(Request $request)
    {
        return \App\Models\Bentuk_bu::all();
    }
    
    public function get_golongan_bu_by_id(Request $request)
    {
        return \App\Models\Golongan_bu::all();
    }
    
    public function get_kualifikasi_bu_by_id(Request $request)
    {
        return \App\Models\Kualifikasi_bu::all();
    }

    public function get_status_sertifikasi_by_id(Request $request)
    {
        return \App\Models\Status_sertifikasi::all();
    }
    
    public function get_jabatan_by_id(Request $request)
    {
        return \App\Models\M_jabatan::where('id_jabatan',$request->id_jabatan)->get();
    }

    
    public function get_klasifikasi_sb (Request $request)
    {
        return \App\Models\Klasifikasi_sb::all();
    }    


    public function get_klasifikasi_bl (Request $request)
    {
        return \App\Models\Klasifikasi_bl::all();
    }

    public function get_group (Request $request)
    {
        return \App\Models\M_group::all();
    }


    
}
