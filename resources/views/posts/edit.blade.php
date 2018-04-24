@extends('layouts.default')

@section('content')

<br>
<form class="loginForm" action="{{route('posts.update', $post->id)}}" method="post">

  @csrf
  {{ method_field('PUT') }}

  <label for="title">Title</label>
    <input type="text" name="title" value="{{$post->title}}">
    <br>
  <label for="content">Content</label>
    <input type="text" name="content" value="{{$post->content}}">
    <br>

    @include('partials/errors')
    <button type="submit" name="button">Save Updates</button>
</form>

@stop
