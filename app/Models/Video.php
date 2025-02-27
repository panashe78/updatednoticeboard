<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurant_id',
        'file_path',
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}