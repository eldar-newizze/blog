<?php

namespace App\Http\Resources;

use App\Models\Post;
use App\Models\User;
use App\Services\CategoryServices;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    private $categoryService;

    public function __construct($resource)
    {
        $this->categoryService = new CategoryServices();
        parent::__construct($resource);
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /*** @var Post $post */
        $posts = $this->posts;
        $result = $this->categoryService->getPosts($posts);
        return [
            'title' => $this->title,
            'posts' => $result
        ];
    }

}
