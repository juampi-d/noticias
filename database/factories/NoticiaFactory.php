<?php

namespace Database\Factories;

use App\Models\Autor;
use App\Models\Autore;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->sentence(),
            'cuerpo' => fake()->paragraph(3),
            'imagen' => fake()->imageUrl(),
            'autor_id' => Autore::factory()
        ];
    }
}
