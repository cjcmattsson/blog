<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;
use App\User;

class PagesController extends Controller
{
  public function index (): View
  {

    return view('index', ['name' => 'Laravel']);

  }
}
