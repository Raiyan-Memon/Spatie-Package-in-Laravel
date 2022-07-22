@extends('layouts.app')

@section('content')


{{-- @dd($editdata) --}}
<div class="container">

@foreach ($editdata as $item)


<form action="{{route('post.update', $item->id)}}" method="POST">
    @csrf
    @method('PATCH')

    <input class="form-control mb-2" type="text" name="title" id="" value="{{$item->title}}">
    <input class="form-control" type="text" name="desc" id="" value="{{$item->desc}}">
    <button class="btn btn-success btn-sm" type="submit">Update</button>

</form>

<a href="{{route('post.index')}}"><button class="btn btn-info btn-sm">Back</button></a>
    
@endforeach

</div>

@endsection