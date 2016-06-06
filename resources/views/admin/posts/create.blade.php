@extends('layouts.admin')
@section('content')
    <h1>Create Post</h1>

    {!! Form::open(['route' => 'admin.posts.store', 'method' => 'post', 'files'=>true]) !!}
    	<div class="form-group">
            {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
            <small class="text-danger">{{ $errors->first('title') }}</small>
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category:', ['class' => 'control-label']) !!}
            {!! Form::select('category_id', ['' => 'Choose Categories'] + $categories , null , ['class' => 'form-control']) !!}
            <small class="text-danger">{{ $errors->first('category_id') }}</small>
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:', ['class' => 'control-label']) !!}
            {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
            <small class="text-danger">{{ $errors->first('photo_id') }}</small>
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Description:', ['class' => 'control-label']) !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            <small class="text-danger">{{ $errors->first('body') }}</small>
        </div>
        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop