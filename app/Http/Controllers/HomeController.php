<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// This instruction is necessary to find the "Dress" model (its namespace "App" must be used to find the model)
use App\Dress;

class HomeController extends Controller
{
  public function index() {
    // Connecting to the database to retrieve all the data
    // It corresponds to: SELECT * FROM dresses ("dresses" is a table in the DB)
    $all_dresses = Dress::all();
    // Creating the associative array to pass the data
    $data = [
      'title' => 'Fashion Shop',
      'dresses' => $all_dresses,
    ];
    return view('home', $data);
  }

  public function contacts() {
    // Creating the associative array to pass the data
    $data = [
      'title' => 'Contact us!'
    ];
    return view('contacts', $data);
  }
}
