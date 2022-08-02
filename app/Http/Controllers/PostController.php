<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Interfaces\PostRepositoryInterface;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct(PostRepositoryInterface $post)
    {
        $this->middleware('auth');
        $this->post = $post;
    }

    public function index()
    {
        $post = $this->post->all();
        return view('post.index', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(StorePostRequest $request)
    {
        $this->post->store($request);
        return redirect('posts');
    }

    public function show(Post $post)
    {
        $showPost = $this->post->getUserById($post);
        return view('post.details', compact('showPost'));
    }

    public function edit(Post $post)
    {
        $editData = $this->post->getUserById($post);
        return view('post.edit', compact('editData'));
    }

    public function update(StorePostRequest $request,  $post)
    {
        $this->post->updatePost($request, $post);
        return redirect('posts');
    }

    public function destroy($post)
    {
        $this->post->delete($post);
        return back();
    }
}
