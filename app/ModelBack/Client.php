<?php

namespace App\ModelBack;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'name', 'last_name', 'city', 'address', 'phone', 'email',
    ];

    public function Projects()
    {
        return $this->hasMany(Project::class);
    }

    public function Invoices()
    {
        return $this->hasMany(Invoice::class);
    }

}
