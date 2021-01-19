<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    $data = [
      'title' => 'Fashion Shop'
    ];
    return view('home', $data);
  }

  public function contacts() {
    $data = [
      'title' => 'Contact us!'
    ];
    return view('contacts', $data);
  }
}
