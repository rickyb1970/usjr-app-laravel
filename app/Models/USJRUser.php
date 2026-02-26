<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class USJRUser extends Model
{
    //
    protected $table = 'usjrusers';
    public $timestamps = false;
    protected $primaryKey = 'userid';
    protected $fillable = [
        'userid',
        'username',
        'userpassword',
        'userempid',
        'usertypeid',
        'userroleid',
    ];
}
