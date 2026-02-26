<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
    public $increments = false;
    public $timestamps = false;
    protected $primaryKey = 'schoolid';
    protected $fillable = [
        'schoolid',
        'schoolfullname',
        'schoolshortname',
    ];
}
