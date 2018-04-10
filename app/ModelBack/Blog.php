<?php

namespace App\ModelBack;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'body', 'photo', 'user_id'
    ];
}
