<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presenter extends Model
{
    //
protected $fillable = ['event_id', 'name', 'profile_photo'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function session()
    {
        return $this->hasMany(session::class);
    }

}
