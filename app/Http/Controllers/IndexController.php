<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index() {
        return inertia('Index/Index');
    }

    public function show() {
        return inertia('Index/Show');

    }

    public function bio() {
        return "Bio";
    }

    public function exhibitions() {
        return "Exhibitions";
    }

    public function gallery() {
        return "Gallery";
    }

    public function blog() {
        return "Blog";
    }
}
