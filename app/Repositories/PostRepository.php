<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Post;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function createOrUpdate($request, $post = null)
    {
        return Post::updateOrCreate(['id' => $post->id ?? ''], $request);
    }

    public function get($post)
    {
        return Post::find($post);
    }

    public function delete($id)
    {
        return $id->delete();
    }
}
