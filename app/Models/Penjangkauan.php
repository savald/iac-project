<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjangkauan extends Model
{
  use HasFactory;

  protected $table = 'tb_form1';
  // protected $primaryKey = 'no';
  public $timestamps = false;

  protected $fillable = [
    'no',
    'id',
    'uuid',
    'umur',
    'nama_kd',
    'uic',
    'tipe_kd',
    'provinsi',
    'district',
    'kecamatan',
    'kelurahan',
    'detail_alamat',
    'kode_nama_cbs',
    'tgl_kontak',
    'nama_lengkap',
    'nik',
    'tgl_lahir',
    'lokasi_kontak',
    'phone_number',
    'status_kontak',
    'kontak_ke',
    'informasi_diberikan',
    'secara_fisik_mencederai',
    'secara_verbal_menghina',
    'mengancam_dan_membahayakan',
    'memaksa_berhubungan_sex',
    'rujukan',
    'puskesmas_id',
    'nik',
    'kondom',
    'pelicin',
    'media_kie',
  ];
}
