@extends('main')

@section('title', 'Form Monitoring PSP+')
@section('formType', 'Form FSW')
@section('form', 'Monitoring PSP+')

@section('content')
  <div class="content">
    <div class="block block-rounded">
      <div class="block-content">
        <form id="inputForm">
          <div class="mb-3 row">
            <label for="kode_pl" class="col-form-label col-sm-2">Kode/nama PL</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kode_pl" id="kode_pl">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kabupaten" class="col-form-label col-sm-2">Alamat</label>
            <div class="col-sm-10">
              <select class="form-select js-select2" data-placeholder="Pilih kabupaten/kota" name="kabupaten"
                id="kabupaten">
                <option></option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nama_lengkap" class="col-form-label col-sm-2">Nama lengkap</label>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" autocomplete="off">
            </div>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" placeholder="Tanggal lahir" class="form-control js-flatpickr"
                  data-date-format="d-m-Y" name="tgl_lahir" id="tgl_lahir" autocomplete="off">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kode_kd" class="col-form-label col-sm-2">Kode KD</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kode_kd" id="kode_kd">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kode_kd" class="col-form-label col-sm-2">Tanggal Hasil Tes HIV</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" class="form-control js-flatpickr" data-date-format="d-m-Y" name="tgl_hasil_tes_hiv"
                  id="tgl_hasil_tes_hiv" autocomplete="off" placeholder="Pilih tanggal">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kode_kd" class="col-form-label col-sm-2">Tanggal Inisiasi ARV</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" class="form-control js-flatpickr" data-date-format="d-m-Y" name="tgl_inisiasi_arv"
                  id="tgl_inisiasi_arv" autocomplete="off" placeholder="Pilih tanggal">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="regnas" class="col-form-label col-sm-2">Regnas</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="regnas" id="regnas">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kode_kd" class="col-sm-2">Tanggal Retensi ARV</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" class="form-control js-flatpickr" data-date-format="d-m-Y" name="tgl_retensi_arv"
                  id="tgl_retensi_arv" autocomplete="off" placeholder="Pilih tanggal">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kode_kd" class="col-form-label col-sm-2">Tanggal Viral Load</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" class="form-control js-flatpickr" data-date-format="d-m-Y" name="tgl_viral_load"
                  id="tgl_viral_load" autocomplete="off" placeholder="Pilih tanggal">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-3 row align-items-baseline">
            <label class="col-form-label col-sm-2">Hasil Viral Load</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_viral_load"
                  id="hasil_viral_load_terdeteksi" value="Terdeteksi">
                <label class="form-check-label" for="hasil_viral_load_terdeteksi">Terdeteksi</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_viral_load"
                  id="hasil_viral_load_tidak_terdeteksi" value="Tidak Terdeteksi">
                <label class="form-check-label" for="hasil_viral_load_tidak_terdeteksi">Tidak Terdeteksi</label>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label for="lofu" class="col-form-label col-sm-2">LOFU <span style="font-size: 0.75rem">(Tidak akses
                selama
                3 bulan setelah akses
                terakhir)</span></label>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <input type="text" class="form-control" name="lofu" id="lofu" autocomplete="off">
            </div>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" placeholder="Tanggal LOFU ditemukan" class="form-control js-flatpickr"
                  data-date-format="d-m-Y" name="tgl_lofu_ditemukan" id="tgl_lofu_ditemukan" autocomplete="off">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-3 row align-items-baseline">
            <label class="col-form-label col-sm-2">Hasil Identifikasi LOFU</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_identifikasi_lofu"
                  id="hasil_identifikasi_lofu_ditemukan" value="Ditemukan">
                <label class="form-check-label" for="hasil_identifikasi_lofu_ditemukan">Ditemukan</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_identifikasi_lofu"
                  id="hasil_identifikasi_lofu_akses_tempat_lain" value="Mengakses ARV di tempat lain">
                <label class="form-check-label" for="hasil_identifikasi_lofu_akses_tempat_lain">Mengakses ARV di tempat
                  lain</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_identifikasi_lofu"
                  id="hasil_identifikasi_lofu_pindah_alamat" value="Pindah alamat">
                <label class="form-check-label" for="hasil_identifikasi_lofu_pindah_alamat">Pindah alamat</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_identifikasi_lofu"
                  id="hasil_identifikasi_lofu_meninggal_dunia" value="Meninggal dunia">
                <label class="form-check-label" for="hasil_identifikasi_lofu_meninggal_dunia">Meninggal dunia</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_identifikasi_lofu"
                  id="hasil_identifikasi_lofu_tidak_ditemukan" value="Tidak ditemukan">
                <label class="form-check-label" for="hasil_identifikasi_lofu_tidak_ditemukan">Tidak ditemukan</label>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kode_kd" class="col-form-label col-sm-2">Tanggal Reinisiasi ARV</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" class="form-control js-flatpickr" data-date-format="d-m-Y"
                  name="tgl_reinisiasi_arv" id="tgl_reinisiasi_arv" autocomplete="off" placeholder="Pilih tanggal">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nama_layanan" class="col-form-label col-sm-2">Nama Layanan</label>
            <div class="col-sm-10">
              <select class="form-select js-select2 nama_layanan" name="nama_layanan" id="nama_layanan"
                data-placeholder="Pilih layanan">
                <option></option>
                @foreach ($puskesmas as $pkm)
                  <option value="{{ $pkm->pkm_id }}">{{ $pkm->pkm_titel }}</option>
                @endforeach
              </select>
              <div class="invalid-feedback animated fadeIn"></div>
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

@section('scriptFooter')
  <script>
    // Datepicker (flatpickr)
    $("#tanggal_lahir").flatpickr({
      dateFormat: 'd-m-Y',
      // defaultDate: '01-01-2000',
      locale: {
        "firstDayOfWeek": 0, // start week on Monday
        weekdays: {
          shorthand: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
          longhand: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
        },
        months: {
          shorthand: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des", ],
          longhand: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember",
          ]
        },
      },
      disableMobile: "true",
      minDate: "01-01-2000"
    });

    // Submit form
    $('#inputForm').submit(function(e) {
      e.preventDefault();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "{{ route('save.penjangkauan') }}",
        data: $(this).serialize(),
        success: function(response) {
          if (response.status) {
            console.log('oke');
          } else {
            console.log('fail');
          }
        }
      });
    });
  </script>
@endsection
