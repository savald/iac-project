<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfirmasiCBSController extends Controller
{
    public function index()
  {
    return view('pages.form_fsw.konfirmasi-cbs');
  }
}
