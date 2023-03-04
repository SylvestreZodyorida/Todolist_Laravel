<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'surname' => fake()->surname(),
            'email' => fake()->email(),
            'jour' => fake()->jour(),
            'mois' => fake()->mois(),
            'annee' => fake()->annee(),
        ];
    }
}
