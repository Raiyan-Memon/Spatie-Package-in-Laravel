@extends('layouts.app')
@section('content')
    <div class="container">

        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <input class="form-control mb-3" type="text" name="title" id="" placeholder="Title">
            <input class="form-control" type="text" name="desc" id="" placeholder="Description">
            <button type="submit" class="btn btn-success btn-sm">Save</button>
        </form>

        <a href="{{ route('post.index') }}"><button class="btn mt-2 btn-info btn-sm">Back</button></a>
    </div>
@endsection
