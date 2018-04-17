<?php

namespace App\ModelBack;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'name', 'last_name', 'city', 'address', 'phone', 'email',
    ];

}
