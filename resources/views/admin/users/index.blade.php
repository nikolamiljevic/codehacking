@extends('layouts.admin')

@section('content')
<h1>Users</h1>
<table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
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
                <td><img height='30px' src="/images/{{$user->photo ? $user->photo->file : 'No user photo'}}"></td>
                <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active == 1 ? 'Active' : 'Not active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
  </table>
@endsection