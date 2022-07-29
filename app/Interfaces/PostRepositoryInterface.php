<?php

namespace App\Interfaces;

interface PostRepositoryInterface
{
    public function all();
    public function createOrUpdate($request, $post = null);
    public function get($id);
    public function delete($id);
}
