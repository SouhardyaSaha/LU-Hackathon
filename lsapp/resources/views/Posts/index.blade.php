@extends('layouts.app')

@section('content')

<h1> POSTS </h1>

@if (count($posts) > 0)
@foreach ($posts as $post)
<div class="well">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
    <small>{{$post->created_at}} by {{ $post->user->name }}</small>
</div>
@endforeach
{{ $posts->links() }}
@else
<p>No posts Found</p>
@endif

<a href="/posts/create" class="btn btn-primary btn-lg">Create Post</a>


<!--<div  style = "background-color:#EEE6FF;  margin-top:5px; width:560px;height:40px; margin-left:270px">
<input type="radio" name="q2" id="q2y" value="Yes">
<button style = " width:70px;height:30px;margin-top:5px" type = "submit" formation = "#" onmousedown="this.style.background='#80D8FF'" >Like </button>
<input type="radio" name="q2" id="q2n" value="No">
<button style = " width:70px;height:30px;margin-left:160px" type = "submit" formation = "#" onmousedown="this.style.background='#80D8FF'">Unlike </button>
<button style = "background-color:#5BAEF9; width:70px;height:30px;margin-left:160px" type = "submit" formation = "#">Bookmark </button>
</div>-->
@endsection
