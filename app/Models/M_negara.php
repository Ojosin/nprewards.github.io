<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_negara extends Model
{
    //
    protected $table = 'negara';
    protected $primaryKey = 'id_negara';
    protected $guarded = [];
    public $timestamps= false;
}
