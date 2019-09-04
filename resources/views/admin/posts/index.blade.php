@extends('layouts.admin')

@section('content')

@if(Session::has('deleted_post'))
<p class="bg-danger">{{session('deleted_post')}}</p>
@endif

<h1>posts</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Photo</th>
      <th>User</th>
      <th>Category</th>
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
        <td><img src ="{{$post->photo ? public_path('/uploads/images/'). $post->photo->file : 'http://placehold.it/400x400' }}" class="imga-thumbnail" height="50px"></td>
        <td><a href="{{route('posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
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
