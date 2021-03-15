<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_peralatan extends Model
{
    //
    protected $table = 'm_peralatan';
    protected $primaryKey = 'id_peralatan';
    protected $guarded = [];
    public $timestamps= false;
}
