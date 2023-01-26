@extends('main')

@section('title', 'Form Pemetaan')

@section('style')
  <style>
    #tanggal_survei {
      background-color: white;
    }
  </style>
@endsection

@section('content')
  <h1 class="h3 mb-3"><strong>Form Pemetaan</strong></h1>

  <div class="row">
    <div class="col">
      <div class="card flex-fill w-100">
        <div class="card-body">
          <form id="inputForm">
            <div class="row">
              <label for="nama_hotspot" class="col-sm-2 col-form-label">Nama hotspot</label>
              <div class="col-sm-7 mb-3">
                <input type="text" class="form-control" name="nama_hotspot" id="nama_hotspot">
              </div>
              <div class="col-sm-3 mb-3">
                <div class="input-group">
                  <input type="text" placeholder="Tanggal survei" class="form-control" name="tanggal_survei"
                    id="tanggal_survei">
                  <span class="input-group-text">
                    <i class="align-middle" data-feather="calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="jumlah_psp" class="col-sm-2 col-form-label">Jumlah PSP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="jumlah_psp" id="jumlah_psp">
              </div>
            </div>
            <div class="row">
              <label class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-3 mb-3">
                    <select class="form-select form-select-sm" name="provinsi" id="provinsi">
                      <option selected>Pilih provinsi</option>
                      @foreach ($provinsi as $item)
                        <option value="{{ $item->daerah_kode }}">{{ $item->daerah_titel }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-sm-3 mb-3">
                    <select class="form-select form-select-sm" name="kabupaten" id="kabupaten">
                      <option selected>Pilih kabupaten/kota</option>
                    </select>
                  </div>
                  <div class="col-sm-3 mb-3">
                    <select class="form-select form-select-sm" name="kecamatan" id="kecamatan">
                      <option selected>Pilih kecamatan</option>
                    </select>
                  </div>
                  <div class="col-sm-3 mb-3">
                    <select class="form-select form-select-sm" name="desa" id="desa">
                      <option selected>Pilih desa</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 mb-3">
                    <textarea class="form-control" name="detil_alamat" placeholder="Detail alamat" rows="3"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 d-flex justify-content-end">
                    <button class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scriptFooter')
  <script>
    $("#tanggal_survei").flatpickr({
      dateFormat: 'd-m-Y',
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
      disableMobile: "true"
    });

    $('#provinsi, #kabupaten, #kecamatan, #desa').select2({
      theme: 'bootstrap-5',
      selectionCssClass: "select2--small",
      dropdownCssClass: "select2--small",
    })

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

    $(document).on('change', '[name=kabupaten]', function() {
      let kabupatenId = $(this).val();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('get-kecamatan') }}",
        type: "POST",
        data: {
          kabupatenId
        },
        success: function(response) {
          var obj = JSON.parse(response);
          if (obj != '') {
            $('#kecamatan').html(obj);
          }
        }
      });
    });

    $(document).on('change', '[name=kecamatan]', function() {
      let kecamatanId = $(this).val();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('get-kelurahan') }}",
        type: "POST",
        data: {
          kecamatanId
        },
        success: function(response) {
          var obj = JSON.parse(response);
          if (obj != '') {
            $('#desa').html(obj);
          }
        }
      });
    });

    $('#inputForm').submit(function(e) {
      e.preventDefault();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "{{ route('data-pribadi') }}",
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
