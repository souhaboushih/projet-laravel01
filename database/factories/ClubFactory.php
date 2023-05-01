<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Club>
 */
class ClubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=> fake()->sentence(),
            'image'=>fake()->imageUrl(560,450,'animals',true),
            'Domaine'=> fake()->text(40),
            'prix' => fake()->randomFloat(2, 0, 99), // Génère un nombre à virgule aléatoire avec 2 décimales, entre 0 et 9999.
            'user_id'=>User::get('id')->random(),
        ];
    }
}
