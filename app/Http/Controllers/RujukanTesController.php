<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RujukanTesController extends Controller
{
  public function index()
  {
    return view('pages.form-fsw.rujukan-tes');
  }
}
