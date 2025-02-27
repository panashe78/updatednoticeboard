<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $guarded = [];
    //

    public function Restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
