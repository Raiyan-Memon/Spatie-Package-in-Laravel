<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Prophecy\Promise\ReturnPromise;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return "store";    
        
        $store = new Post;
        $store->title = $request->title;
        $store->desc= $request->desc;
        $store->save();

        return redirect('post');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $showpost = Post::find($post);
        return view('post.details', compact('showpost'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $editdata = Post::find($post);
        return view('post.edit', compact('editdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $post)
    {
        // return "update";  
        $update = Post::find($post);
        $update->title = $request->title;
        $update->desc = $request->desc;
        $update->update();
        return redirect('post');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $post)
    {
        // return "destroy";
        $delete = Post::find($post);
        $delete->delete();
        return back();  
    }
}
