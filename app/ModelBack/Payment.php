<?php

namespace App\ModelBack;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'method'
    ];

    public function Invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
