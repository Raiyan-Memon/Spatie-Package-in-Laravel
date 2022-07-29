@extends('layouts.app')
@section('content')
    <style>
        .x {
            color: red;
        }
    </style>

    <div class="container">
        <h3>Name : {{ $show->name }}</h3>
        <h5>Email : {{ $show->email }}</h5>
        <h6>
            Roles : @foreach ($roles as $rolename)
                <form class="d-inline-block" action="{{ route('admin.store', $rolename->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="remove_role_id" id="" value="{{ $show->id }}">
                    <input type="hidden" name="rolename" id="" value="{{ $rolename->name }}">

                    <button type="submit" class="btn btn-primary btn-sm"> {{ $rolename->name }} <span class="x">&nbsp;
                            X</span> </button>
                </form>
            @endforeach
        </h6>
        <br />
        <h3>Assign Role to the user</h3>

        @php 
        $role = DB::select("select * from spatie.roles"); 
        @endphp

        <form action="{{ route('admin.store') }}" method="POST">
            @csrf
            <select name="role" id="">
                <option value="">Select From Roles</option>

                @foreach ($role as $userrole)
                    <option value="{{ $userrole->name }}">{{ $userrole->name }}</option>
                @endforeach
            </select>
            <button class="btn btn-success btn-sm" type="submit">Save</button>
            <input type="hidden" name="add_role_id" id="" value="{{ $show->id }}">
        </form>

        <a href="{{ route('admin.index') }}"><button class="btn btn-primary btn-sm">Back</button></a>
    </div>
@endsection
