@extends('layouts.app')

@section('content')



<div class="container">

  <a href="{{route('post.index')}}"><button class="btn btn-primary btn-sm">Go To Post</button></a>

    <h3>Users List</h3>


    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
          
          </tr>
        </thead>
        <tbody>

@foreach ($user as $item)
    
{{-- @dump($item) --}}

          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>
             <a href="{{route('admin.show', $item->id )}}"><button class="btn btn-primary btn-sm">Show</button></a>
            </td>
          </tr>

          @endforeach 
        </tbody>
      </table>
    



</div>

@endsection