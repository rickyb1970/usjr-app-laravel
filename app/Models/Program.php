<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //
    public $increments = false;
    public $timestamps = false;
    protected $primaryKey = 'progid';
    protected $fillable = [
        'progid',
        'progfullname',
        'progshortname',
        'progschoolid',
        'progschooldeptid',
    ];
}
