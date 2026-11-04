<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName().' '.fake()->lastName(),
            'email' => fake()->safeEmail(),
            'phone' => '300 123 4567',
            'service_interest' => fake()->randomElement(['diseno', 'ciberseguridad', 'servicios_tecnicos', 'otro']),
            'message' => fake()->paragraph(),
            'read' => false,
        ];
    }

    public function read(): static
    {
        return $this->state(fn (array $attributes) => ['read' => true]);
    }
}
