<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerNotifikasiController extends Controller
{
    public function index()
  {
    return view('pages.form-fsw.partner-notifikasi');
  }
}
