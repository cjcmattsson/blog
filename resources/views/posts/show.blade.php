@extends('layouts.default')

@section('content')

<br>

  <a href="/">Back</a>

    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>

@if ($user = Auth::user())
 <a href="{{route('posts.edit', $post->id)}}"><button type="button" name="button">Edit Post</button></a>
@endif

@stop
