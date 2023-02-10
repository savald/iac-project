<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemuanKasusController extends Controller
{
    public function index()
  {
    return view('pages.form-fsw.temuan-kasus');
  }
}
