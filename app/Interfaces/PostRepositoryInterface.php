<?php

namespace App\Interfaces;

interface PostRepositoryInterface
{
    public function all();
    public function store($request);
    public function updatePost($request, $post);
    public function getUserById($id);
    public function delete($id);
}
