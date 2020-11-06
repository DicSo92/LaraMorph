<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence($this->faker->numberBetween(6, 40), false),
            'image' => 'https://picsum.photos/300/200?random=' . $this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'user_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
