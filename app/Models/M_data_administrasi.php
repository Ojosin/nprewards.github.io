<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_data_administrasi extends Model
{
    //
    protected $table = 'm_data_administrasi';
    protected $primaryKey = 'id_data_administrasi';
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
