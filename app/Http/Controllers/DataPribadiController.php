<?php

namespace App\Http\Controllers;

use App\Models\Penjangkauan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class DataPribadiController extends Controller
{
  public function index(Request $request)
  {

    $listTahun = [];
    $listBulan = [];
    $listHari = [];

    for ($i = 0; $i <= 30; $i++) {
      $listTahun[] = 1970 + $i;
    }
    for ($i = 0; $i <= 11; $i++) {
      $listBulan[] = 1 + $i;
    }
    for ($i = 0; $i <= 30; $i++) {
      $listHari[] = 1 + $i;
    }

    $params = [
      'provinsi' => session('provinsi'),
      'kabupaten' => session('kabupaten'),
      'kecamatan' => session('kecamatan'),
      'desa' => session('desa'),
      'detail_alamat' => session('detail_alamat'),
      'allProvinsi' =>  DaerahController::getProvinsi(),
      'listTahun' => $listTahun,
      'listBulan' => $listBulan,
      'listHari' => $listHari,
    ];

    return view('pages.form-fsw.data-pribadi', $params);
  }

  public function saveDataPribadi(Request $request)
  {
    $rules = [
      'nama_kd' => 'required',
      'kode_kd_nama' => 'required',
      'kode_kd_tahun' => 'required',
      'kode_kd_bulan' => 'required',
      'kode_kd_hari' => 'required',
      'tipe_kd' => 'required',
      'provinsi' => 'required',
      'kabupaten' => 'required',
      'kecamatan' => 'required',
      'desa' => 'required',
      'detail_alamat' => 'required',
    ];

    // $validator = Validator::make($request->all(), $rules, ['required' => 'Wajib isi']);
    // if ($validator->fails()) return response()->json([
    //   'status' => false,
    //   'errors' => $validator->errors()
    // ]);

    $kode_kd = strtoupper($request->kode_kd_nama)
      . substr($request->kode_kd_tahun, -2)
      . $request->kode_kd_bulan
      . $request->kode_kd_hari;

    $newDate = date("Ymd", strtotime($request->tanggal_edukasi));

    $data = [
      'no' => Penjangkauan::select('no')->orderBy('no', 'desc')->first()->no + 1,
      'id' => $newDate . $kode_kd,
      'uuid' => Str::uuid(),
      // 'umur' =>  date("Y") - $request->kode_kd_tahun,
      'nama_kd' => $request->nama_kd,
      'uic' => $kode_kd,
      'tipe_kd' => $request->tipe_kd,
      'provinsi' => $request->provinsi,
      'district' => $request->kabupaten,
      'kecamatan' => $request->kecamatan,
      'kelurahan' => $request->desa,
      'detail_alamat' => $request->detail_alamat,
    ];

    // Penjangkauan::create($data);

    session([
      'to_penjangkauan' => true,
      'no' => $data['no'],
      'provinsi' => $request->provinsi,
      'kabupaten' => $request->kabupaten,
      'kecamatan' => $request->kecamatan,
      'desa' => $request->desa,
      'detail_alamat' => $request->detail_alamat,
      'kode_kd_nama' => $request->kode_kd_nama,
      'kode_kd_tahun' => $request->kode_kd_tahun,
      'kode_kd_bulan' => $request->kode_kd_bulan,
      'kode_kd_hari' => $request->kode_kd_hari,
    ]);

    return response()->json([
      'status' => true,
    ]);
  }
}
