<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['fullName', 'bookDate', 'checkIn', 'checkOut', 'specialRequest', 'status', 'room_id', 'phone', 'email'];

    use HasFactory;

    public function room():HasMany
    {
        return $this->hasMany(Room::class);
    }
}
