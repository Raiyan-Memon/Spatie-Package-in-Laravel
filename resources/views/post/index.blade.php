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
        @role('admin|adder')
            <a href="{{ route('post.create') }}">
                <button class="btn btn-success btn-sm">Add Post</button>
            </a>
        @endrole
        <div class="row">
            @foreach ($post as $postitem)
                <div class="col-3 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ $postitem->title }}</h3>
                            @role('admin|editor')
                                <a href="{{ route('post.edit', $postitem->id) }}">
                                    <button class="btn btn-info btn-sm">Edit</button></a>
                            @endrole
                            @role('admin|deletor')
                                <form action="{{ route('post.destroy', $postitem->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            @endrole
                        </div>
                        <div class="card-body">
                            <p>{{ $postitem->desc }}</p>
                            <p class="text-right">
                                <a href="{{ route('post.show', $postitem->id) }}" class="text-end showmore">Show More >></a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
