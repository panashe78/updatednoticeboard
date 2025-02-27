<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Deal extends Model
    {
        use HasFactory;
    
        protected $fillable = [
            'resort_id',
            'title',
            'description',
            'discount_percentage',
            'price_after_discount',
            'start_date',
            'end_date'
        ];
    
        public function resort()
        {
            return $this->belongsTo(Restaurant::class);
        }
    }

