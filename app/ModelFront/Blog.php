<?php

namespace App\ModelFront;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'body', 'photo', 'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
