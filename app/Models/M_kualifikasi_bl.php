<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_kualifikasi_bl extends Model
{
    //
    protected $table = 'm_kualifikasi_bl';
    protected $primaryKey = 'id_kualifikasi_bl';
    protected $guarded = [];
    public $timestamps= false;


    public function klasifikasi_bl()
    {
    	return $this->hasOne(Klasifikasi_bl::class,'id_klasifikasi_bl','kode_bl');
    }
    
    public function kualifikasi_bu()
    {
    	return $this->hasOne(Kualifikasi_bu::class,'id_kualifikasi_bu','kual');
    }
}
