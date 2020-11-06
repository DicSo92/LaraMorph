<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment' => $this->faker->sentence($this->faker->numberBetween(6, 40), false),
            'user_id' => $this->faker->numberBetween(1, 10),
            'post_id' => $this->faker->numberBetween(1, 25),
        ];
    }
}
