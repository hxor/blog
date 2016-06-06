@extends('layouts.admin')
@section('content')
    <h1>Edit User</h1>
    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->file : 'http://codehacking.dev/images/plc/fail.png'}}" alt="" class="img-responsive img-rounded">
    </div>
    <div class="col-sm-9">
        {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch', 'files'=>true]) !!}
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
            {!! Form::select('role_id',  $roles,null, ['class' => 'form-control']) !!}
            <small class="text-danger">{{ $errors->first('role_id') }}</small>
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status:', ['class' => 'control-label']) !!}
            {!! Form::select('is_active', [1 => 'Active', 0 => 'Not Active'], null, ['class' => 'form-control']) !!}
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
    </div>

    {{--@include('includes.form-error')--}}
@stop