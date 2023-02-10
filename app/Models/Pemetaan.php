<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemetaan extends Model
{
  use HasFactory;

  protected $table = 'tb_form_pemetaan';
  protected $primaryKey = 'no';
  public $timestamps = false;
  protected $fillable = [
    'no',
    'nama_hotspot',
    'tgl_survei',
    'jumlah_psp',
    'provinsi',
    'kabupaten',
    'kecamatan',
    'desa',
    'detail_alamat',
    'koordinat',
    'created_date',
  ];
}
