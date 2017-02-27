<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
      $people = ['Tom', 'Jeffery', 'Sam'];
      return view('welcome')->with('people', $people);
    }

    public function about() {
      return view('about');
    }
}
