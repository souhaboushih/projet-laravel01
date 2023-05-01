<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titre_formation'=> fake()->sentence(),
            'image_formation'=>fake()->imageUrl(782,158,'animals',true),
            'description_formation'=> fake()->text(40),
            'prix_formation' => fake()->randomFloat(2, 0, 99), // Génère un nombre à virgule aléatoire avec 2 décimales, entre 0 et 9999.
            'datePrévue_formation' => fake()->date('Y-m-d', 'now'), // Génère une date aléatoire au format 'année-mois-jour', à partir de la date actuelle.
            'user_id'=>user::get('id')->random(),
            'club_id'=>club::get('id')->random(),
        ];
    }
}
