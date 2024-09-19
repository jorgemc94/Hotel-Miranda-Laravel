<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; 

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::with(['bookings', 'amenities', 'photos'])->get();
        return view('miranda.rooms.index', compact('rooms'));
    }

    public function show(string $id)
    {
        $rooms = Room::with(['bookings', 'amenities', 'photos'])->get();
        $room = Room::with(['bookings', 'amenities', 'photos'])->findOrFail($id);
        return view('miranda.rooms.room-details', ['rooms' => $rooms , 'room' => $room]);
    }
}