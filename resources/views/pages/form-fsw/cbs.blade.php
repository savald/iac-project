@extends('main')

@section('title', 'Form CBS')
@section('formType', 'Form FSW')
@section('form', 'CBS')

@section('content')
  <div class="content">
    <div class="block block-rounded">
      <div class="block-content">
        <form id="inputForm">
          <div class="mb-4 row">
            <label for="kode_pl" class="col-sm-2 col-form-label">Kode/nama PL</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kode_pl" id="kode_pl">
            </div>
          </div>
          <div class="mb-4 row">
            <label for="kabupaten" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <select class="form-select js-select2" name="kabupaten" id="kabupaten"
                data-placeholder="Pilih kabupaten/kota">
                <option></option>
              </select>
            </div>
          </div>
          <div class="mb-4 row align-items-baseline">
            <label class="col-sm-2 col-form-label">Tipe KD</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tipe_kd" id="tipe_kd_psp" value="PSP">
                <label class="form-check-label" for="tipe_kd_psp">PSP</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tipe_kd" id="tipe_kd_pasangan"
                  value="LBT/Pasangan PSP+">
                <label class="form-check-label" for="tipe_kd_pasangan">LBT/Pasangan PSP+</label>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama lengkap</label>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" autocomplete="off">
            </div>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" placeholder="Tanggal lahir" class="form-control js-flatpickr"
                  data-date-format="d-m-Y" name="tanggal_lahir" id="tanggal_lahir" autocomplete="off">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="kode_kd" class="col-sm-2 col-form-label">Kode KD/Pasangan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="kode_kd" id="kode_kd">
            </div>
          </div>
          <div class="mb-4 row">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nik" id="nik">
            </div>
          </div>
          <div class="mb-4 row">
            <label for="lokasi_cbs" class="col-sm-2 col-form-label">Lokasi CBS</label>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <input type="text" class="form-control" name="lokasi_cbs" id="lokasi_cbs" autocomplete="off">
            </div>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" placeholder="Tanggal CBS" class="form-control js-flatpickr" data-date-format="d-m-Y"
                  name="tanggal_cbs" id="tanggal_cbs" autocomplete="off">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-4 row align-items-baseline">
            <label class="col-sm-2 col-form-label">Hasil CBS</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_cbs" id="hasil_cbs_reaktif"
                  value="Reaktif">
                <label class="form-check-label" for="hasil_cbs_reaktif">Reaktif</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_cbs" id="hasil_cbs_non_reaktif"
                  value="Non-reaktif">
                <label class="form-check-label" for="hasil_cbs_non_reaktif">Non-reaktif</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_cbs" id="hasil_cbs_not_valid"
                  value="Not Valid">
                <label class="form-check-label" for="hasil_cbs_not_valid">Not Valid</label>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="nama_layanan_tes_konfirmasi" class="col-sm-2 col-form-label">Nama Layanan Tes
              Konfirmasi</label>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <input type="text" class="form-control" name="nama_layanan_tes_konfirmasi"
                id="nama_layanan_tes_konfirmasi" autocomplete="off">
            </div>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" placeholder="Tanggal Rencana Tes Konfirmasi" class="form-control js-flatpickr"
                  data-date-format="d-m-Y" name="tanggal_rencana_tes_konfirmasi" id="tanggal_rencana_tes_konfirmasi"
                  autocomplete="off">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="mb-4 row align-items-baseline">
            <label class="col-sm-2 col-form-label">Hasil Tes Konfirmasi</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_tes_konfirmasi"
                  id="hasil_tes_konfirmasi_reaktif" value="Reaktif">
                <label class="form-check-label" for="hasil_tes_konfirmasi_reaktif">Reaktif</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_tes_konfirmasi"
                  id="hasil_tes_konfirmasi_non_reaktif" value="Non-reaktif">
                <label class="form-check-label" for="hasil_tes_konfirmasi_non_reaktif">Non-reaktif</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="hasil_tes_konfirmasi"
                  id="hasil_tes_konfirmasi_not_valid" value="Indeterminate">
                <label class="form-check-label" for="hasil_tes_konfirmasi_not_valid">Indeterminate</label>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
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
    // $("#tanggal_lahir, #tanggal_cbs, #tanggal_rencana_tes_konfirmasi").flatpickr({
    //   dateFormat: 'd-m-Y',
    //   locale: {
    //     "firstDayOfWeek": 0, // start week on Monday
    //     weekdays: {
    //       shorthand: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
    //       longhand: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
    //     },
    //     months: {
    //       shorthand: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des", ],
    //       longhand: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
    //         "Oktober", "November", "Desember",
    //       ]
    //     },
    //   },
    //   disableMobile: "true"
    // });

    $('#kabupaten').select2({
      theme: 'bootstrap-5',
      selectionCssClass: "select2--small",
      dropdownCssClass: "select2--small",
    })

    // Select2
    $(document).on('change', '[name=provinsi]', function() {
      let provinsiId = $(this).val();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('get-kabupaten') }}",
        type: "POST",
        data: {
          provinsiId
        },
        success: function(response) {
          var obj = JSON.parse(response);
          if (obj != '') {
            $('#kabupaten').html(obj);
          }
        }
      });
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
