<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetensiARVController extends Controller
{
    public function index()
  {
    return view('pages.form-fsw.retensi-arv');
  }
}
