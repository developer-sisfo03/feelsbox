<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\landingPage>
 */
class LandingPageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "slug" => 'feelsbox',
            "visi" =>  $this->faker->text(),
            'misi' =>  $this->faker->text(),
            'about' =>  $this->faker->text(),
            'direct' =>  $this->faker->text(),
            'pencapaian' =>  $this->faker->text(),
        ];
    }
}
