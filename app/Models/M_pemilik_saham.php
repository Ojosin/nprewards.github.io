<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_pemilik_saham extends Model
{
    //
    protected $table = 'm_pemilik_saham';
    protected $primaryKey = 'id_pemilik_saham';
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
