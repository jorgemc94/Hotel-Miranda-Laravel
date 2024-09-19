<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_url'
    ];

    public function rooms():BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'rooms_photos');
    }
}
