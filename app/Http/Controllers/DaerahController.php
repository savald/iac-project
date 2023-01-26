<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaerahController extends Controller
{
  public static function getProvinsi()
  {
    return DB::table('tb_daerah_siha')
      ->where('daerah_tipe', 'Provinsi')
      ->select('daerah_titel', 'daerah_kode')
      ->get();
  }

  public static function getKabupaten(Request $request)
  {
    $kabupaten = DB::table('tb_daerah_siha')
      ->where('daerah_tipe', 'Kabupaten')
      ->where('daerah_paren', $request->provinsiId)
      ->select('daerah_titel', 'daerah_kode')
      ->get();

    $html = '<option value="">Pilih Kabupaten/Kota</option>';

    foreach ($kabupaten as $row) {
      $html .= '<option value="' . $row->daerah_kode . '">' . $row->daerah_titel . '</option>';
    }

    return json_encode($html);
  }

  public static function getKecamatan(Request $request)
  {
    $kecamatan = DB::table('tb_daerah_siha')
      ->where('daerah_tipe', 'Kecamatan')
      ->where('daerah_paren', $request->kabupatenId)
      ->select('daerah_titel', 'daerah_kode')
      ->get();

    $html = '<option value="">Pilih Kecamatan</option>';

    foreach ($kecamatan as $row) {
      $html .= '<option value="' . $row->daerah_kode . '">' . $row->daerah_titel . '</option>';
    }

    return json_encode($html);
  }

  public static function getKelurahan(Request $request)
  {
    $kelurahan = DB::table('tb_daerah_siha')
      ->where('daerah_tipe', 'Kelurahan')
      ->where('daerah_paren', $request->kecamatanId)
      ->select('daerah_titel', 'daerah_kode')
      ->get();

    $html = '<option value="">Pilih Desa</option>';

    foreach ($kelurahan as $row) {
      $html .= '<option value="' . $row->daerah_kode . '">' . $row->daerah_titel . '</option>';
    }

    return json_encode($html);
  }
}
