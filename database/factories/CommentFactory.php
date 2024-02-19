<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            "content"=>$this->faker->sentence(3),
            "user_id"=>User::all()->random()->id,
            "commentable_id" => Post::all()->random()->id,
            "commentable_type"=> 'App\Models\Post'
        ];
    }
}
