<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement($array = array('like', 'love', 'funny', 'dislike', 'angry', 'sad')),
            'reactionable_id' => $this->faker->paragraph(10),
            'reactionable_type' => $this->faker->image($dir = '/tmp', $width = 640, $height = 480),
            'user_id' => $this->faker->numberBetween($min = 1, $max = 1000)
        ];
    }
}
