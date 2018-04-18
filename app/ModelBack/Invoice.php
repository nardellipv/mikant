<?php

namespace App\ModelBack;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'date_start', 'date_end', 'price', 'quantity', 'tax', 'description','status','client_id','payment_id','project_id'
    ];

    public function Payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function Client()
    {
        return $this->belongsTo(Client::class);
    }

    public function Project()
    {
        return $this->belongsTo(Project::class);
    }
}
