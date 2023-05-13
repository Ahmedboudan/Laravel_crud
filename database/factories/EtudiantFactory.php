<?php

namespace Database\Factories;
use App\Models\Etudiant;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Etudiant::class;
    public function definition(): array
    {
        return [
            'code' => $this->faker->word,
            'nom' => $this->faker->word,
            'prenom' => $this->faker->word,
            'niveau' => $this->faker->numberBetween(1,3),
            'filiere' => $this->faker->word,
            'created_at' => now()
        ];
    }
}
