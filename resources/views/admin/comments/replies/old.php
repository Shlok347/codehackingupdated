@if(count($comments) > 0)

        @foreach($comments as $comment)

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img height="64" class="media-object" src="{{$comment->photo}}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{$comment->author}}
                            <small>{{$comment->created_at->diffForHumans()}}</small>
                        </h4>
                        <p>{{$comment->body}}</p>

                        @if(count($comment->replies)>0)

                        @foreach($comment->replies as $reply)

                        @if($reply)


                        <!-- Nested Comment -->
                        <div id="nested-comment" class="media">
                            <a class="pull-left" href="#">
                                <img height="60" class="media-object" src="{{$reply->photo}}" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$reply->author}}
                                    <small>{{$reply->created_at->diffForHumans()}}</small>
                                </h4>
                                {{$reply->body}}
                            </div>

                            <div class="comment-reply-container">
                              <button class="toggle-reply btn btn-primary pull-right">Reply</button>

                            <div class="comment-reply col-md-9 pull-right">

                            {!! Form::open(['method'=>'POST', 'action'=> 'CommentRepliesController@createReply']) !!}
                                 <div class="form-group">

                                     <input type="hidden" name="comment_id" value="{{$comment->id}}">

                                     {!! Form::label('body', 'Reply:') !!}
                                     {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>1])!!}
                                 </div>

                                 <div class="form-group">
                                     {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
                                 </div>
                            {!! Form::close() !!}


                            </div>
                              </div>
                                <!-- End Nested Comment -->
                      </div>
                      @else
                      <h1 class="text-center">No Replies!</h1>
                      @endif
                        @endforeach
                        @endif

              </div>
            </div>

@endforeach

@endif

@stop
