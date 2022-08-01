@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($edit_data as $item)
            <form action="{{ route('posts.update', $item->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <input class="form-control mb-2" type="text" name="title" id="" value="{{ $item->title }}">
                <input class="form-control" type="text" name="desc" id="" value="{{ $item->desc }}">
                <button class="btn btn-success btn-sm" type="submit">Update</button>
            </form>
            <a href="{{ route('posts.index') }}"><button class="btn btn-info btn-sm">Back</button></a>
        @endforeach
    </div>
@endsection
