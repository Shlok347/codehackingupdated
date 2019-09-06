@extends('layouts.admin')

@section('content')

<h1>Edit Post</h1>
@include('includes.form_error')
<div class="row">

  <div class="col-md-4">

<img height="300" width="300" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" >
  </div>

  <div class="col-md-8">
    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category') !!}
        {!! Form::select('category_id', $categories, null , ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null,  ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-md-4']) !!}
    </div>

    {!! Form::close() !!}

{!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}
    <div class="form-group">
      {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-md-4 offset-md-2']) !!}
    </div>
{!! Form::close() !!}


</div>
</div>


@stop
