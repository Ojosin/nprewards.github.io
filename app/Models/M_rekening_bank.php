<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_rekening_bank extends Model
{
    //
	protected $table = 'm_rekening_bank';
    protected $primaryKey = 'id_rekening_bank';
    protected $guarded = [];
    public $timestamps= false;
}
