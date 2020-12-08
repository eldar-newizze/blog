<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
            'title' => $this->faker->sentence,
            'text' => $this->faker->text,
            'img' => $this->faker->image('public/storage/images', 640, 480, null, false),
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'status' => $this->faker->boolean,
        ];
    }
}
