<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announce>
 */
class AnnounceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'heure-depart' => fake()->time(),
            'heure-arrive' => fake()->time(),
            'description' => fake()->name(),
            'dateDebut' => fake()->date(),
            'dateFin' => fake()->date(),
            'user_id' => User::factory(),
           
            
        ];
    }
}
