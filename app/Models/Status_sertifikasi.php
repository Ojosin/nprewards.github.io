<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status_sertifikasi extends Model
{
    //
    protected $table = 'status_sertifikat';
    protected $primaryKey = 'id_status_sertifikat';
    protected $guarded = [];
    public $timestamps= false;
}
