@extends('layouts.admin')

@section('content')

<h1>Categories</h1>

<div class="row">


  @if($photos)

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Created at</th>


    </tr>
  </thead>

  <tbody>

      @foreach($photos as $photo)
      <tr>
        <td>{{$photo->id}}</td>
        <td><img height="50" src="{{$photo ? $photo->file : 'http://placehold.it/400x400' }}"></td>
        <td>{{$photo->created_at ? $photo->created_at->diffForHumans() : 'no date'}}</td>

        <td>
          {!! Form::open( ['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}

          <div class="form-group">
            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
          </div>
      <!-- </div> -->
          {!! Form::close() !!}
          <td>

      </tr>
      @endforeach

  </tbody>
</table>
@endif


</div>
</div>



@stop
