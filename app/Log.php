<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $guarded = [];

    public function scopeQueued($query)
    {
        return $query->where('status', 0);
    }

    public function scopeDone($query)
    {
        return $query->where('status', 1);
    }

}
