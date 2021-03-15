<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_personil extends Model
{
    //
    protected $table = 'm_personil';
    protected $primaryKey = 'id_personil';
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
