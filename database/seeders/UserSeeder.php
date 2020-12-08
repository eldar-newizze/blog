<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class UserSeeder
 * @package Database\Seeders
 */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = Post::first();
        if (!$post) {
            User::factory()
                ->has(
                    Category::factory()
                        ->state(
                            function ($a, User $u) {
                                return ['user_id' => $u->id];
                            }
                        )->has(
                            Post::factory()
                                ->state(
                                    function (array $a, Category $category) {
                                        return ['category_id' => $category->id, 'user_id' => $category->user->id];
                                    }
                                )->count(3)
                        )
                )->count(10)->create();
        }
    }
}
