<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_group extends Model
{
    //

    protected $table = 'm_group';
    protected $primaryKey = 'id_group';
    protected $guarded = [];
    public $timestamps= false;



    // public function study_group()
    // {
    // 	return $this->hasOne(M_study_group::class,'study_group_id','study_group_id');
    // }
    
    // public function employee()
    // {
    // 	return $this->hasOne(M_employee::class,'employee_id','employee_id');
    // }
}
