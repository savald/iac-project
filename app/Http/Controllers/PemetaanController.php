<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemetaanController extends Controller
{
  public function index()
  {
    $provinsi =  DaerahController::getProvinsi();
    return view('pages.form_fsw.pemetaan', compact('provinsi'));
  }
}
