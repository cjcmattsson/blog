<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Post;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PostsController
{
use ValidatesRequests;

  public function show($id): View
  {
    $post = Post::find($id);

    abort_unless($post, 404);

    return view("posts/show", ['post'=>$post]);
  }

  public function edit($id): View
  {
    $post = Post::find($id);

    abort_unless($post, 404);

    return view("posts/edit", ['post'=>$post]);
  }

  public function update($id)
  {
    $post = Post::find($id);
    abort_unless($post, 404);

     request()->validate([
            'title' => 'required|string|max:100',
            'content' => 'required|string'
        ]);

    $attributes = request()->only('title', 'content');
    $post->update($attributes);

    return view("posts/show", ['post'=>$post]);
  }
}
