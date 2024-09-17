<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'client_name' => $this->faker->name,
            'client_email' => $this->faker->safeEmail,
            'client_phone' => $this->faker->phoneNumber,
            'client_photo' => $this->faker->imageUrl(),
            'subject' => $this->faker->sentence(),
            'comment' => $this->faker->paragraph(),
            'status' => $this->faker->boolean(),
        ];
    }
}
