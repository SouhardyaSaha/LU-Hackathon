@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1> {{ $post->title }} </h1>
<div>
    {{ $post->body }}
</div>
    <hr>
        <small>written on: {{$post->created_at}} by {{ $post->user->name }} </small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-dark">Edit Post</a>
            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        @endif
    @endif
    <br><br>
    <h2>Comments:</h2><br>
    {{-- Comment Logic --}}
            <div class="comment-list">
                @foreach ($post->comments as $comment)
                <div class="well">
                    <h4>{{ $comment->body }}</h4>
                    <lead>{{ $comment->user->name }}</lead>
                    <br>
                            {{-- Writhing --}}
                                <a href="{{route('comment.edit',$comment->id)}}" class="btn btn-info btn-xs">Edit</a>

                            {{-- end --}}
                            {!! Form::open(['action' => ['CommentController@destroy', $comment->id], 'method' => 'POST', 'class' => 'pull-left']) !!}
                            {!! Form::hidden('_method', 'DELETE') !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                    <br>
                </div>
                @endforeach
            </div>
            <div class="comment-from">
                <form action="{{ route('postcomment.store', $post->id) }}" method="post" role="form" >
                    {{ csrf_field() }}
                    {{-- <legend>Create Comment</legend> --}}

                    <div class="form-group">
                        <input type="text" class="form-control" name="body" id="" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Comment </button>
                </form>
            </div>
            <br><br><br><br>
@endsection
