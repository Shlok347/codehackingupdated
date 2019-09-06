@extends('layouts.blog-home')

@section('content')

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">


            <h1 class="page-header">
              Welcome To CodeHacking CMS
                <small>A way to gain knowledge</small>
            </h1>

            @if(count($posts)>0)

              @foreach($posts as $post)
            <!-- First Blog Post -->
            <h2>
                <a href="{{route('home.post', $post->slug)}}">{{$post->title}}</a>
            </h2>
            <p class="lead">
                by : {{$post->user->name}}
            </p>
            <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</p>
            <hr>
            <img class="img-responsive" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/700x200'}}" alt="">
            <hr>
            <p>{!! str_limit($post->body, 300) !!}</p>
            <a class="btn btn-primary" href="{{route('home.post', $post->slug)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

@endforeach
@endif
            <hr>

<!-- Pagination -->
<div class="row">
  <div class="col-md-6 col-md-offset-5">
    {{$posts->render()}}
  </div>
</div>

        </div>

        <!-- Blog Sidebar Widgets Column -->
  @include('includes.front_sidebar')
</div>
<!-- /.row -->

<hr>

@endsection
