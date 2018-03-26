<?php

declare(strict_types=1);

namespace App\Http\Controllers;


class PagesController extends Controller
{
  public function index ()
  {
        return view('index', ['name' => 'Laravel']);

  }
}
