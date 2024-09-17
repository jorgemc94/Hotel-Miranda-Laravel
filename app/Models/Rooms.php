<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'roomNumber', 'status', 'roomType', 'description', 'offer', 'price', 'discount', 'cancellation'
    ];

    public function bookings():HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function amenities():BelongsToMany
    {
        return $this->belongsToMany(Amenity::class);
    }

    public function photos():BelongsToMany
    {
        return $this->belongsToMany(Photo::class);
    }
}
