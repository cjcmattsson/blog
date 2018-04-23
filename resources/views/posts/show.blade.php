@extends('layouts.default')

@section('content')

<br>
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>

@if ($user = Auth::user())
 <a href="{{route('posts.edit', $post->id)}}"><button type="button" name="button">HEJ</button></a>
@endif

@stop
