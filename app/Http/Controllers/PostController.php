<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        $store = $request->all('title', 'desc');
        $this->post->createOrUpdate($store);
        return redirect('post');
    }

    public function show(Post $post)
    {
        $showpost = $this->post->get($post);
        return view('post.details', compact('showpost'));
    }

    public function edit(Post $post)
    {
        $editdata = $this->post->get($post);
        return view('post.edit', compact('editdata'));
    }

    public function update(Request $request, Post $post)
    {
        $input = $request->all();
        $post = $this->post->get($post->id);
        $this->post->createOrUpdate($input, $post);
        return redirect('post');
    }

    public function destroy($post)
    {
        $delete = $this->post->get($post);
        $this->post->delete($delete);
        return back();
    }
}
