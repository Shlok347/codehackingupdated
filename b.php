@extends('layouts.admin')

@section('content')

<h1>Edit User</h1>

    <div class="col-md-3 col-sm-3">

      <img @if($user->photo){ src="{{ URL::to('/') }}/uploads/images/{{ $user->photo->file }}"
    }    @else { src = "http://www.sclance.com/pngs/user-png/user_png_1449784.png"; }
@endif  >
    </div>
<!-- {{$user->photo}} ? {{ URL::to('/') }}/uploads/images/{{ $user->photo->file }} : 'http://www.sclance.com/pngs/user-png/user_png_1449784.png' -->
    <div class="col-md-9">

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
            {!! Form::submit('create user', ['class'=>'btn btn-primary']) !!}
          </div>


    </div>

    {!! Form::close() !!}


    @include('includes.form_error')






@stop
