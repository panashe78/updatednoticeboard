<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable = [
        'resort_id',
        'title',
        'description',
        'price',
        'valid_until',
    ];
}
