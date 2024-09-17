<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id', 'photo_url'
    ];

    public function room():BelongsToMany
    {
        return $this->belongsToMany(Room::class);
    }
}
