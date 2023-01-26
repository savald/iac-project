@extends('main')

@section('title', 'Form Data Pribadi')

@section('content')
  <h1 class="h3 mb-3"><strong>Form Data Pribadi</strong></h1>

  <div class="row">
    <div class="col">
      <div class="card flex-fill w-100">
        <div class="card-body">
          <form id="inputForm">
            <div class="mb-3 row">
              <label for="namaKD" class="col-sm-2 col-form-label">Nama KD</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_kd" id="namaKD">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="kode_kd" class="col-sm-2 col-form-label">Kode KD</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_kd" id="kode_kd">
              </div>
            </div>
            <div class="mb-3 row align-items-center">
              <label class="col-sm-2 col-form-label">Tipe KD</label>
              <div class="col-sm-10">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="tipe_kd" id="tipe_kd_psp" value="psp">
                  <label class="form-check-label" for="tipe_kd_psp">PSP</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="tipe_kd" id="tipe_kd_pasangan" value="pasangan">
                  <label class="form-check-label" for="tipe_kd_pasangan">Pasangan</label>
                </div>
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
  @endsection

  @section('scriptFooter')
    <script>
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
