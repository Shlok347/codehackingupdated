@extends('layouts.admin')

@section('content')

<h1>Users</h1>
<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created At</th>
        <th>Updated At<th>
      </tr>
    </thead>
    <tbody>
      @if($users)
      @foreach($users as $user)

        <tr>
        <td>{{$user->id}}</td>
        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
        <td><img src ="{{ URL::to('/') }}/uploads/images/{{ $user->photo->file }}" class="imga-thumbnail" height="50px"></td>
        <!-- <td><img height="50" src="{{Storage::url('images/'.$user->photo->file)}}" alt="{{$user->filename}}"></td> -->
        <!-- <td><img height="50" src="{{$user->photo ? url('images/'.$user->photo->file) : 'No User Photo'}}"></td> -->
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
      </tr>
      @endforeach

      @endif

    </tbody>
  </table>


@stop
