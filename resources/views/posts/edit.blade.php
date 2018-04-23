@extends('layouts.default')

@section('content')

<br>
<form class="loginForm" action="{{url('login')}}" method="post">

  @csrf

  <label for="title">Title</label>
    <input type="text" name="title" value="{{$post->title}}">
    <br>
  <label for="content">Content</label>
    <input type="text" name="content" value="{{$post->content}}">
    <br>
</form>

@stop
