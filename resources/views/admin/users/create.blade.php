@extends('layouts.admin')

@section('content')

    {!! Form::open(['method' => 'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
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
        {!! Form::select('is_active',array('1'=>'Active','0'=>'Not Active'),0,['class'=>'form-control']) !!}
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
    <div class="form-group">
        {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}

    </div>


    {!! Form::close() !!}


    @include('includes.create')



@stop