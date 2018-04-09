@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Blog</h1>
            <p>Posts written by {{ $name }}:</p>
            <ul>
                @foreach ($posts as $post)
                    <li>
                      <h4>{{ $post->title}}</h4>
                      <p>{{$post->content}}</p>
                    </li>
                @endforeach
            </ul>
        </div><!-- /col -->
    </div><!-- /row -->
@stop
