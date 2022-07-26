<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\konsultasi>
 */
class KonsultasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 5),
            'psikolog_id' => $this->faker->numberBetween(1, 2),
            'waktu' => $this->faker->time(),
            'tanggal' => $this->faker->date(),
            'link' => $this->faker->url(),
            'status' => $this->faker->boolean(),
        ];
    }
}
