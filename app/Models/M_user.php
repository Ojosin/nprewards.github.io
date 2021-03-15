<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_user extends Model
{
    //


    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps= false;

    public function group()
    {
        return $this->hasOne(M_group::class,'id_group','id_group');
    }

}
