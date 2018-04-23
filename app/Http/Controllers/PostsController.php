<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Post;

class PostsController
{
  public function show($id): View
  {
    $post = Post::find($id);

    return view("posts/show", ['post'=>$post]);
  }

  public function edit($id): View
  {
    $post = Post::find($id);

    return view("posts/edit", ['post'=>$post]);
  }
}
