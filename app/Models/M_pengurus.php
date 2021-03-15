<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_pengurus extends Model
{
    //
    protected $table = 'm_pengurus';
    protected $primaryKey = 'id_pengurus';
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

    public function negara()
    {
        return $this->hasOne(M_negara::class,'id_negara','kebangsaan');
    }
    
    public function m_jabatan()
    {
        return $this->hasOne(M_jabatan::class,'id_jabatan','jabatan');
    }

}
