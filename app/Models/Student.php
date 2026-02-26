<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    public $increments = false;
    public $timestamps = false;
    protected $primaryKey = 'studid';
    protected $fillable = [
        'studid',
        'studfirstname',
        'studlastname',
        'studmidname',
        'studprogid',
        'studschoolid',
        'studschooldeptid',
        'studyear',
    ];
}
