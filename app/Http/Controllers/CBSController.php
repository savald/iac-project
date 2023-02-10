<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CBSController extends Controller
{
    public function index()
  {
    return view('pages.form-fsw.cbs');
  }
}
