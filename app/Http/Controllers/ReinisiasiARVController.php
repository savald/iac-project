<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReinisiasiARVController extends Controller
{
    public function index()
  {
    return view('pages.form_fsw.reinisiasi-arv');
  }
}
