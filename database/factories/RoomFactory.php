<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    protected $model = Room::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'roomNumber' => $this->faker->unique()->numberBetween(1, 100),
            'status' => $this->faker->randomElement(['available', 'booked']),
            'roomType' => $this->faker->word,
            'description' => $this->faker->sentence(),
            'offer' => $this->faker->boolean(),
            'price' => $this->faker->numberBetween(50, 500),
            'discount' => $this->faker->numberBetween(0, 50),
            'cancellation' => $this->faker->word,
        ];
    }
}
