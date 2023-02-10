<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InisiasiARVController extends Controller
{
    public function index()
  {
    return view('pages.form-fsw.inisiasi-arv');
  }
}
