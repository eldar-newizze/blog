<?php

declare(strict_types=1);


namespace App\Services;

use App\Models\Post;

/**
 * Class CategoryServices
 * @package App\Services
 */
class CategoryServices
{

    /**
     * @param Post $posts
     * @return array
     */
    public function getPosts($posts)
    {
        $result = [];
        foreach ($posts as $post) {
            $result[] = [
                'title' => $post->title,
                'text' => $post->text,
                'img' => $post->img,
                'user' => $post->user,
            ];
        }
        return $result;
    }
}
