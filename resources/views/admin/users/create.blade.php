@extends('layouts.admin')
@section('content')
    <h1>Create</h1>
    {!! Form::open(['route' => 'admin.users.store', 'method' => 'post', 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('name') }}</small>
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('email') }}</small>
    </div>
    <div class="form-group">
        {!! Form::label('role_id', 'Role:', ['class' => 'control-label']) !!}
        {!! Form::select('role_id', [''=>'Choose Options'] + $roles,null, ['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('role_id') }}</small>
    </div>
    <div class="form-group">
        {!! Form::label('is_active', 'Status:', ['class' => 'control-label']) !!}
        {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], 0, ['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('is_active') }}</small>
    </div>
    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:', ['class' => 'control-label']) !!}
        {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('file') }}</small>
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
        <small class="text-danger">{{ $errors->first('password') }}</small>
    </div>
    <div class="form-group">
        {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    {{--@include('includes.form-error')--}}
@stop