<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_kabupaten extends Model
{
    //
    protected $table = 'm_kabupaten';
    protected $primaryKey = 'id_kabupaten';
    protected $guarded = [];
    public $timestamps= false;
}
