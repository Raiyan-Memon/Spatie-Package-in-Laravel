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
        $update = $this->getUserById($post);
        $update->update($request->all());
        $update->save();
    }

    public function getUserById($post)
    {
        return Post::find($post);
    }

    public function delete($id)
    {
        $delete = $this->getUserById($id);
        return $delete->delete();
    }
}
