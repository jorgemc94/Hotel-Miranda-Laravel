<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request, $id)
{
    $request->validate([
        'checkIn' => 'required|date',
        'checkOut' => 'required|date|after:checkIn',
        'fullName' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'specialRequest' => 'nullable|string',
    ]);

    $checkIn = $request->input('checkIn');
    $checkOut = $request->input('checkOut');
    $room_id = $id; // Usamos el ID proporcionado en la URL

    // Encuentra la habitación
    $room = Room::find($room_id);

    // Verifica si la habitación existe
    if (!$room) {
        return redirect()->back()->with('error', 'La habitación no existe.');
    }

    // Verifica disponibilidad
    if ($room->available($checkIn, $checkOut)->exists()) {
        Booking::create([
            'fullName' => $request->input('fullName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'room_id' => $room_id,
            'status' => 'In progress',
            'bookDate' => now(),
            'specialRequest' => $request->input('specialRequest'),
        ]);

        return redirect()->back()->with('success', 'Reserva realizada con éxito.');
    } else {
        return redirect()->back()->with('error', 'Lo siento, la habitación no está disponible en esas fechas.');
    }
}
}
