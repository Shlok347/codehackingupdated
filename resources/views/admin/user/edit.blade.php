@extends('layouts.admin')

@section('content')

<h1>Edit User</h1>

  <div class="row">
    <div class="col-md-3 col-sm-3">

      @if (File::exists(public_path("uploads/images/".$user->photo->file)))
      <img src="{{ URL::to('/') }}/uploads/images/{{ $user->photo->file }}" class="img-responsive img-rounded" alt="" />
  @else
      <img src="{{ URL::to('/') }}/uploads/images/abc.jpg" class="img-responsive img-rounded" alt="" />
  @endif


    </div>
<!-- {{$user->photo}} ? {{ URL::to('/') }}/uploads/images/{{ $user->photo->file }} : 'http://www.sclance.com/pngs/user-png/user_png_1449784.png' -->
    <div class="col-md-9 col-sm-9">

          {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=>true])!!}
          <div class="form-group">
              {!! Form::label('name', 'Name:') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('email', 'Email:') !!}
              {!! Form::email('email', null, ['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('password', 'Password:') !!}
              {!! Form::password('password', ['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('role_id', 'Role:') !!}
              {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null, ['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
              {!! Form::label('is_active', 'Status:') !!}
              {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), null , ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
              {!! Form::label('photo_id', 'Photo') !!}
              {!! Form::file('photo_id', null,  ['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            {!! Form::submit('Update User', ['class'=>'btn btn-primary col-md-4']) !!}
          </div>

            {!! Form::close() !!}



            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]])!!}

            <div class="form-group">
              {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-md-4 offset-md-4']) !!}
            </div>

            {!! Form::close() !!}


  </div>
</div>

    @include('includes.form_error')






@stop
