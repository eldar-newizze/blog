<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->id;
        $post->img =  $request->img;
        $post->status = true;
        $post->description = $request->description;
        $post->save();
        //@todo использовать try...catch
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //@todo более читабельная запись
        if ($post = Post::find($id)) {
            return $post;
        }
        return response()->json([
            "status" => false,
            "message" => "Post not found"
        ], 404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->category_id = 1;
        $post->img =  $request->img;
        $post->status = true;
        $post->description = $request->description;
        $post->save();
        //@todo use try...catch
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //@todo аналог метод show
        $post = Post::find($id)->delete();
        if (!$post) {
            return response()->json([
                "status" => false,
                "message" => "Post not found"
            ])->setStatusCode(404);
        }
    }
}
