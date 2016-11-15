@extends('layouts.admin')

@section('content')
    @if(Session::has('deleted_user'))

        <p class="bg-danger">{{session('deleted_user')}}</p>

    @endif
<h1>Users</h1>


<table class="table table-hover">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Updated</th>
    </tr>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)


            <tr>
                <td>{{$user->id}}</td>
                <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
                <td> <img  height =100 width =100 src="{{$user->photo ? URL::asset('/'). $user->photo->file:'https://placeholdit.imgix.net/~text?txtsize=6&txt=100%C3%97100&w=100&h=100'}}" alt="" ></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active==1?'Active':'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>


        @endforeach
    @endif

    </tbody>
</table>
@stop