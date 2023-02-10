<?php

namespace App\Http\Controllers;

use App\Models\Pemetaan;
use Illuminate\Http\Request;
use Validator;

class PemetaanController extends Controller
{
  public function index()
  {
    $provinsi =  DaerahController::getProvinsi();
    return view('pages.form-fsw.pemetaan', compact('provinsi'));
  }

  public function savePemetaan(Request $request)
  {
    $rules = [
      'nama_hotspot' => 'required',
      'tgl_survei' => 'required',
      'jumlah_psp' => 'required',
      'detail_alamat' => 'required',
    ];

    if (!$request->koordinat) {
      $rules['provinsi'] = 'required';
      $rules['kabupaten'] = 'required';
      $rules['kecamatan'] = 'required';
      $rules['desa'] = 'required';
    }
    if (!$request->provinsi) {
      $rules['koordinat'] = 'required';
    }

    // $validator = Validator::make($request->all(), $rules, ['required' => 'Required']);
    // if ($validator->fails()) return response()->json([
    //   'status' => false,
    //   'errors' => $validator->errors()
    // ]);

    $data = [
      'nama_hotspot' => $request->nama_hotspot,
      'tgl_survei' =>  date("Y-m-d", strtotime($request->tgl_survei)),
      'jumlah_psp' => $request->jumlah_psp,
      'provinsi' => $request->provinsi,
      'kabupaten' => $request->kabupaten,
      'kecamatan' => $request->kecamatan,
      'desa' => $request->desa,
      'detail_alamat' => $request->detail_alamat,
      'koordinat' => $request->koordinat,
      'created_date' => date('Y-m-d H:i:s'),
    ];

    // Pemetaan::create($data);

    // session([
    //   'no' => $request->no,
    //   'provinsi' => $request->provinsi,
    //   'kabupaten' => $request->kabupaten,
    //   'kecamatan' => $request->kecamatan,
    //   'desa' => $request->desa,
    //   'detail_alamat' => $request->detail_alamat,
    // ]);

    return response()->json([
      'status' => true,
      'params' => [
        'provinsi' => $request->provinsi,
        'kabupaten' => $request->kabupaten,
        'kecamatan' => $request->kecamatan,
        'desa' => $request->desa,
        'detail_alamat' => $request->detail_alamat,
      ]
    ]);
  }
}
