<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_pendidikan extends Model
{
    //
    protected $table = 'm_pendidikan';
    protected $primaryKey = 'id_pendidikan';
    protected $guarded = [];
    public $timestamps= false;
}
