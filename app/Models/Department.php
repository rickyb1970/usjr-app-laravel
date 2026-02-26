<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    public $increments = false;
    public $timestamps = false;
    protected $primaryKey = 'deptid';
    protected $fillable = [
        'deptid',
        'deptfullname',
        'deptshortname',
        'deptschoolid',
    ];
}
