<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_pengalaman_bu extends Model
{
    //
    protected $table = 'm_pengalaman_bu';
    protected $primaryKey = 'id_pengalaman_bu';
    protected $guarded = [];
    public $timestamps= false;


     public function klasifikasi_sb()
    {
    	return $this->hasOne(Klasifikasi_sb::class,'id_klasifikasi_sb','kode_sb');
    }
    
    public function provinsi()
    {
    	return $this->hasOne(M_kabupaten::class,'kode_provinsi','lokasi_proyek');
    }
}



