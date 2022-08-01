@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($showPost as $show)
            <h3>{{ $show->title }}</h3>
            <p>{{ $show->desc }}</p>
        @endforeach
        <a href="{{ route('posts.index') }}"><button class="btn btn-primary btn-sm">Back</button></a>
    </div>
@endsection
