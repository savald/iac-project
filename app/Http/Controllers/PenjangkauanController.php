<?php

namespace App\Http\Controllers;

use App\Models\Pemetaan;
use App\Models\Penjangkauan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Validator;

class PenjangkauanController extends Controller
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

    $users = DB::table('tb_users')
      ->where('user_login', '!=', 'root')
      ->where('user_login', '!=', 'adminsuper')
      ->get();

    $params = [
      'no' => session('no'),
      'provinsi' => session('provinsi'),
      'kabupaten' => session('kabupaten'),
      'kecamatan' => session('kecamatan'),
      'desa' => session('desa'),
      'detail_alamat' => session('detail_alamat'),
      'kd_nama' => session('kd_nama'),
      'kd_tahun' => session('kd_tahun'),
      'kd_bulan' => session('kd_bulan'),
      'kd_hari' => session('kd_hari'),
      'puskesmas' => PuskesmasController::getPuskesmas(),
      'allProvinsi' =>  DaerahController::getProvinsi(),
      'hotspots' => Pemetaan::where('kabupaten', session('kabupaten'))->select('no', 'nama_hotspot')->get(),
      'listTahun' => $listTahun,
      'listBulan' => $listBulan,
      'listHari' => $listHari,
      'users' => $users,
    ];

    return view('pages.form-fsw.penjangkauan', $params);
  }

  public function savePenjangkauan(Request $request)
  {

    // Validasi
    $rules = [
      'kode_pl' => 'required',
      'tanggal_edukasi' => 'required',
      'nama_lengkap' => 'required',
      'tgl_lahir' => 'required',
      'kode_kd_nama' => 'required',
      'kode_kd_tahun' => 'required',
      'kode_kd_bulan' => 'required',
      'kode_kd_hari' => 'required',
      'nik' => 'required',
      // 'lokasi_kontak' => 'required',
      'no_telepon' => 'required',
      'status_kontak' => 'required',
      'kontak_ke' => 'required',
      'informasi_diberikan' => 'required',
      'secara_fisik_mencederai' => 'required',
      'secara_verbal_menghina' => 'required',
      'mengancam_dan_membahayakan' => 'required',
      'memaksa_berhubungan_sex' => 'required',
      'rujukan' => 'required',
      'jumlah_kondom' => 'required',
      'jumlah_pelicin' => 'required',
      'jumlah_kie' => 'required',
      'nama_layanan' => 'required',
    ];

    // $validator = Validator::make($request->all(), $rules, ['required' => 'Wajib isi']);
    // if ($validator->fails()) return response()->json([
    //   'status' => false,
    //   'errors' => $validator->errors()
    // ]);

    $data = [
      'umur' => date("Y") - $request->kode_kd_tahun,
      'kode_nama_cbs' => $request->kode_pl,
      'tgl_kontak' => date("Y-m-d", strtotime($request->tanggal_edukasi)),
      'nama_lengkap' => $request->nama_lengkap,
      'nik' => $request->nik,
      'tgl_lahir' => date("Y-m-d", strtotime($request->tgl_lahir)),
      'lokasi_kontak' => $request->lokasi_kontak,
      'phone_number' => $request->no_telepon,
      'status_kontak' => $request->status_kontak,
      'kontak_ke' => $request->kontak_ke,
      'informasi_diberikan' => json_encode($request->informasi_diberikan),
      'secara_fisik_mencederai' => $request->secara_fisik_mencederai,
      'secara_verbal_menghina' => $request->secara_verbal_menghina,
      'mengancam_dan_membahayakan' => $request->mengancam_dan_membahayakan,
      'memaksa_berhubungan_sex' => $request->memaksa_berhubungan_sex,
      'rujukan' => json_encode($request->rujukan),
      'puskesmas_id' => $request->nama_layanan,
      'nik' => $request->nik,
      'kondom' => $request->jumlah_kondom,
      'pelicin' => $request->jumlah_pelicin,
      'media_kie' => $request->jumlah_kie,
    ];

    // Penjangkauan::where('no', $request->no)->update($data);

    session()->forget([
      'to_penjangkauan',
      'no',
      'provinsi',
      'kabupaten',
      'kecamatan',
      'desa',
      'detail_alamat',
      'kode_kd_nama',
      'kode_kd_tahun',
      'kode_kd_bulan',
      'kode_kd_hari',
    ]);

    return response()->json([
      'status' => true,
    ]);
  }
}
