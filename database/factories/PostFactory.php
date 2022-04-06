<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $categories = Category::pluck('id')->toArray();
        return [
            'title' => $this->faker->word,
            'content' => $this->faker->sentence,
            'category_id' => $this->faker->randomElement($categories),

            'user_id' => $this->faker->randomElement($users)
            
        ];
    }
}
