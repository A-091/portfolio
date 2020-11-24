<?php

namespace App;

use App\Events\KramerInComming;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function customerLogs()
    {
        return $this->hasMany(CustomerLog::class);
    }
}
