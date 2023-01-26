<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViralLoadController extends Controller
{
    public function index()
  {
    return view('pages.form_fsw.viral-load');
  }
}
