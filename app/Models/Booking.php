<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName', 'bookDate', 'checkIn', 'checkOut', 'specialRequest', 'status', 'room_id'
    ];

    public function room():BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
