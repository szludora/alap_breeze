<?php

namespace Database\Factories;

use App\Models\Kategoria;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingatlan>
 */
class IngatlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kategoria' => Kategoria::all()->random(),
            'leiras' => fake()->realText(20),
            'hirdetesDatuma' => fake()->date(),
            'tehermentes' => rand(0, 1),
            'ar' => rand(10, 80),
            'kepUrl' => fake()->url(),
        ];
    }
}
