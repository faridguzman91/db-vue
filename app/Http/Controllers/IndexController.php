<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
  //
  public function index()
  {
    return inertia('Index/Index');
  }

  public function show()
  {
    return inertia('Index/Show');
  }

  public function bio()
  {
    return "Bio/Index";
  }

  public function exhibitions()
  {
    return "Exhibitions/Index";
  }

  public function gallery()
  {
    return "Gallery/Index";
  }

  public function blog()
  {
    return "Blog/Index";
  }
  public function cv()
  {
    return "CV/Index";
  }
  public function contact()
  {
    return "Contact/Index";
  }
}
