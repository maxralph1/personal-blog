<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5),
            'body' => $this->faker->paragraph(10),
            'image' => $this->faker->image($dir = '/tmp', $width = 640, $height = 480),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 1000)
        ];
    }
}
