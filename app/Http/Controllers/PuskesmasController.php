<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PuskesmasController extends Controller
{
  public static function getPuskesmas()
  {
    return DB::table('tb_epi_pkm')
      ->where('trash', '0')
      ->select('pkm_titel', 'pkm_id')
      ->get();
  }
}
