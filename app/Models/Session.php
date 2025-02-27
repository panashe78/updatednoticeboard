<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function event()
    {
        return $this->belongsTo(event::class);
    }
    public function presenter()
    {
        return $this->belongsTo(presenter::class);
    }


}
