<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_kantor_cabang extends Model
{
    //
    protected $table = 'm_kantor_cabang';
    protected $primaryKey = 'id_cabang';
    protected $guarded = [];
    public $timestamps= false;

    public function provinsi()
    {
    	return $this->hasOne(M_provinsi::class,'kode_provinsi','kode_provinsi');
    }
    
    public function kabupaten()
    {
    	return $this->hasOne(M_kabupaten::class,'kode_kabupaten','kode_kabupaten');
    }
}
