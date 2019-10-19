@extends('layouts.app')

@section('content')

    <h1>Edit Commment</h1>
    {!! Form::open(['action' => ['CommentController@update', $comment->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{ Form::textarea('body',$comment->body,['class'=>'form-control','placeholder'=>'BodyText']) }}
        </div>
        {{ Form::hidden('_method', 'PUT') }}
        {{Form::submit('Update', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
