<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id', 'amenity'
    ];

    public function room():BelongsToMany
    {
        return $this->belongsToMany(Room::class);
    }
}
