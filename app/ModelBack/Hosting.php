<?php

namespace App\ModelBack;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'plan', 'space_disk', 'transferencia', 'email_account', 'data_base', 'ftp', 'year_pay','cost_before', 'cost_month', 'cost_year','cost_domain'
    ];
}