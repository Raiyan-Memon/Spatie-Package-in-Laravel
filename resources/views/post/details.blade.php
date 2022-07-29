@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($showpost as $showpost)
            <h3>{{ $showpost->title }}</h3>
            <p>{{ $showpost->desc }}</p>
        @endforeach
        <a href="{{ route('post.index') }}"><button class="btn btn-primary btn-sm">Back</button></a>
    </div>
@endsection
