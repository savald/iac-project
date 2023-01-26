<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPribadiController extends Controller
{
  public function index()
  {
    $provinsi =  DaerahController::getProvinsi();
    return view('pages.form_fsw.data-pribadi', compact('provinsi'));
  }

  public function saveDataPribadi(Request $request)
  {
    return [
      'status' => true
    ];
  }
}
