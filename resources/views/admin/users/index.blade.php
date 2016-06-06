@extends('layouts.admin')

@section('content')

    @if(Session::has('created_user'))
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('created_user') !!}</em></div>
    @endif
    @if(Session::has('updated_user'))
        <div class="alert alert-info"><span class="glyphicon glyphicon-ok"></span><em> {!! session('updated_user') !!}</em></div>
    @endif
    @if(Session::has('deleted_user'))
        <div class="alert alert-danger"><span class="glyphicon glyphicon-ok"></span><em> {!! session('deleted_user') !!}</em></div>
    @endif
    <h1>Users</h1>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if($users)

            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://codehacking.dev/images/plc/fail.png'}}" alt=""></td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
                    <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                    <td>
                        {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

        @endif
        </tbody>
    </table>

@stop