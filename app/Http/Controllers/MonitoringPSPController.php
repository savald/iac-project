<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringPSPController extends Controller
{
  public function index()
  {
    $puskesmas = PuskesmasController::getPuskesmas();
    return view('pages.form-fsw.monitoring-psp', compact('puskesmas'));
  }
}
