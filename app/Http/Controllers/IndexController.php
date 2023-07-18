<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index() {
        return "Index";
    }

    public function show() {
        return "Show";

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
