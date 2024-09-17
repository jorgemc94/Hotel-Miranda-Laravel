<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullName' => $this->faker->name,
            'bookDate' => $this->faker->date(),
            'checkIn' => $this->faker->date(),
            'checkOut' => $this->faker->date(),
            'specialRequest' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['In progress', 'Check In', 'Check Out']),
            'room_id' => Room::factory(),
        ];
    }
}
