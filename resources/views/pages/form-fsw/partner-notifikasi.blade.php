@extends('main')

@section('title', 'Form Partner Notifikasi')
@section('formType', 'Form FSW')
@section('form', 'Partner Notifikasi')

@section('content')
  <div class="content">
    <div class="block block-rounded">
      <div class="block-content">
        <form id="inputForm">
          @csrf
          <div class="row mb-3">
            <label for="kode_pl" class="col-sm-2 form-label">Kode/Nama PL</label>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <select class="form-select js-select2 kode_pl" name="kode_pl" id="kode_pl" data-placeholder="Pilih item">
                <option></option>
              </select>
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" placeholder="Tanggal edukasi" class="form-control js-flatpickr tanggal_edukasi"
                  name="tanggal_edukasi" id="tanggal_edukasi" autocomplete="off" data-date-format="d-m-Y">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
                <div class="invalid-feedback animated fadeIn"></div>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kabupaten" class="col-sm-2 form-label">Alamat</label>
            <div class="col-sm-10">
              <select class="form-select js-select2 kabupaten" name="kabupaten" id="kabupaten"
                data-placeholder="Pilih kabupaten/kota">
                <option></option>
              </select>
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="row mb-3">
            <label for="nama_psp" class="col-sm-2 form-label">Nama PSP</label>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <input type="text" class="form-control nama_psp" name="nama_psp" id="nama_psp" autocomplete="off"
                data-date-format="d-m-Y">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" placeholder="Tanggal lahir PSP" class="form-control js-flatpickr tgl_lahir_psp"
                  name="tgl_lahir_psp" id="tgl_lahir_psp">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
                <div class="invalid-feedback animated fadeIn"></div>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kode_kd_psp" class="col-sm-2 form-label">Kode KD PSP</label>
            <div class="col-sm-10">
              <input type="text" class="form-control kode_kd_psp" name="kode_kd_psp" id="kode_kd_psp">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="row mb-3">
            <label for="nama_pasangan" class="col-sm-2 form-label">Nama Pasangan</label>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <input type="text" class="form-control nama_pasangan" name="nama_pasangan" id="nama_pasangan"
                autocomplete="off" data-date-format="d-m-Y">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" placeholder="Tanggal lahir pasangan"
                  class="form-control js-flatpickr tgl_lahir_pasangan" name="tgl_lahir_pasangan" id="tgl_lahir_pasangan">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
                <div class="invalid-feedback animated fadeIn"></div>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kode_pasangan_teridentifikasi" class="col-sm-2 form-label">Kode Pasangan Terindentifikasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control kode_pasangan_teridentifikasi"
                name="kode_pasangan_teridentifikasi" id="kode_pasangan_teridentifikasi">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nik_pasangan_teridentifikasi" class="col-sm-2 form-label">NIK Pasangan
              Terindentifikasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control nik_pasangan_teridentifikasi" name="nik_pasangan_teridentifikasi"
                id="nik_pasangan_teridentifikasi">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="no_telp_pasangan_teridentifikasi" class="col-sm-2 form-label">No. Telp Pasangan
              Terindentifikasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control no_telp_pasangan_teridentifikasi"
                name="no_telp_pasangan_teridentifikasi" id="no_telp_pasangan_teridentifikasi">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="mb-3 row">
            <label class="col-sm-2 form-label">Informasi yang Diberikan</label>
            <div class="col-sm-10">
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]" id="informasi_diberikan_vct"
                  value="VCT">
                <label class="form-check-label" for="informasi_diberikan_vct">VCT</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]" id="informasi_diberikan_ims"
                  value="IMS">
                <label class="form-check-label" for="informasi_diberikan_ims">IMS</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]" id="informasi_diberikan_tb"
                  value="TB">
                <label class="form-check-label" for="informasi_diberikan_tb">TB</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]" id="informasi_diberikan_cbs"
                  value="CBS">
                <label class="form-check-label" for="informasi_diberikan_cbs">CBS</label>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-12 d-flex justify-content-end">
              <button class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
