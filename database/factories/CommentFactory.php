<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $posts = Post::pluck('id')->toArray();
        return [
            'content' => $this->faker->sentence,
            'post_id' => $this->faker->randomElement($posts),
            'user_id' => $this->faker->randomElement($users)
        ];
    }
}
