@extends('layouts.admin')

@section('content')
    @include('includes.create')
    <div class="row">
            <div class="col-md-3">
                <img src="{{ $user->photo? $user->photo->file:'https://placeholdit.imgix.net/~text?txtsize=6&txt=100%C3%97100&w=100&h=100' }}" alt="" class="img-responsive img-thumbnail">
            </div>
    <div class="col-md-9">
        <h1>Edit Users</h1>
        {!! Form::model($user,['method' => 'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
        <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('email','Email:') !!}
                {!! Form::text('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('role_id','Role:') !!}
                {!! Form::select('role_id',['0'=>'choose your option']+$roles,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('is_active','Status:') !!}
                {!! Form::select('is_active',array('1'=>'Active','0'=>'Not Active'),null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('password','Password:') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                {!! Form::label('photo_id','Choose the file:') !!}
                {!! Form::file('photo_id',['class'=>'form-control']) !!}
        </div>

                {!! Form::token() !!}
        <div>
        <div class="form-group">
                {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}

        </div>


        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE','action'=>['AdminUsersController@destroy',$user->id]])!!}

            <div class="form-group">
                {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}

            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>





@stop