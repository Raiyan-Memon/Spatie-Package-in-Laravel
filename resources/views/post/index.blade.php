@extends('layouts.app')
@section('content')
    <style>
        .showmore {
            all: unset;
            color: gray;
            cursor: pointer;
        }
    </style>
    <div class="container">
        <a href="{{ route('posts.create') }}">
            <button class="btn btn-success btn-sm">Add Post</button>
        </a>
        <div class="row">
            @foreach ($post as $postItem)
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $postItem->title }}</h3>
                            @role('admin|editor')
                                <a href="{{ route('posts.edit', $postItem->id) }}">
                                    <button class="btn btn-info btn-sm">Edit</button></a>
                            @endrole
                            @role('admin|deletor')
                                <form action="{{ route('posts.destroy', $postItem->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            @endrole
                        </div>
                        <div class="card-body">
                            <p>{{ $postItem->desc }}</p>
                            <p class="text-right">
                                <a href="{{ route('posts.show', $postItem->id) }}" class="text-end showmore">Show More
                                    >></a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
