<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuestBookMessage extends Model
{
    protected $fillable = [
        'name',
        'message',
    ];
}
