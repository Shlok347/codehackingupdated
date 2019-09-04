@extends('layouts.admin')

@section('content')

<h1>Categories</h1>

<div class="row">

  <div class="col-md-6">

    {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}

    <div class="form-group">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
<!-- <div class="row"> -->
    <div class="form-group" >
      {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-md-4 offset-md-1']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open( ['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

    <div class="form-group">
      {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-md-4 offset-md-2']) !!}
    </div>
<!-- </div> -->
    {!! Form::close() !!}

  </div>



</div>
</div>



@stop
