<?php

namespace App\ModelBack;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'name', 'date_start', 'date_end', 'observation', 'client_id'
    ];

    public function Client()
    {
        return $this->belongsTo(Client::class);
    }

    public function Invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
