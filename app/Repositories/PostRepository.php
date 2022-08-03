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

    public function store($request)
    {
        return Post::create($request->all());
    }

    public function updatePost($request, $post)
    {
        $update = $this->getPostById($post);
        return $update->update($request->all());
    }

    public function getPostById($post)
    {
        return Post::find($post);
    }

    public function delete($id)
    {
        $delete = $this->getPostById($id);
        return $delete->delete();
    }
}
