@extends('layouts.admin')

@section('content')

<h1>posts</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Category</th>
      <th>Photo</th>
      <th>Title</th>
      <th>Body</th>
      <th>Created</th>
      <th>Updated</th>
    </tr>
  </thead>

  <tbody>
    @if($posts)

      @foreach($posts as $post)
      <tr>
        <td>{{$post->id}}</td>
        <td><img src ="{{ URL::to('/') }}/uploads/images/{{ $post->photo->file }}" class="imga-thumbnail" height="50px"></td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->category_id}}</td>
        <td>{{$post->photo_id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
      </tr>
      @endforeach
    @endif
  </tbody>

</table>

@stop
