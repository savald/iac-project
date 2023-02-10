@extends('main')

@section('title', 'Form Data Pribadi')
@section('formType', 'Form FSW')
@section('form', 'Data Pribadi')

@section('content')
  <div class="content">
    <div class="block block-rounded">
      <div class="block-content">
        <form id="inputForm">
          @csrf
          <input type="hidden" name="data_pribadi">
          {{-- <input type="hidden" name="no_pemetaan" value="{{ $noPemetaan }}"> --}}
          <div class="mb-4 row">
            <label for="nama_kd" class="col-sm-2 col-form-label">Nama KD</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_kd" id="nama_kd" autocomplete="off">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="kode_kd" class="col-sm-2 col-form-label">Kode KD</label>
            <div class="col-sm-6 col-xl-4">
              <div class="row">
                <div class="col-3 pe-0">
                  <input type="text" class="form-control" name="kode_kd_nama" id="kode_kd_nama" placeholder="NAMA"
                    style="text-transform:uppercase" maxlength="4" autocomplete="off" readonly>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-3 px-0">
                  <select class="form-select js-select2" name="kode_kd_tahun" id="kode_kd_tahun" data-placeholder="TAHUN">
                    <option value=""></option>
                    @foreach ($listTahun as $tahun)
                      <option value="{{ $tahun }}">
                        {{ substr($tahun, -2) }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-3 px-0">
                  <select class="form-select js-select2" name="kode_kd_bulan" id="kode_kd_bulan" data-placeholder="BULAN">
                    <option value=""></option>
                    @foreach ($listBulan as $bulan)
                      <option value="{{ $bulan }}">
                        {{ $bulan }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-3 ps-0">
                  <select class="form-select js-select2" name="kode_kd_hari" id="kode_kd_hari" data-placeholder="TGL.">
                    <option value=""></option>
                    @foreach ($listHari as $hari)
                      <option value="{{ $hari }}">
                        {{ $hari }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
              </div>
              <div class="border kd_image">
                <img src="{{ asset('assets/img/KD_Format.png') }}" class="w-100" alt="kd_format">
              </div>
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
                <input class="form-check-input" type="radio" name="tipe_kd" id="tipe_kd_pasangan" value="Pasangan">
                <label class="form-check-label" for="tipe_kd_pasangan">Pasangan</label>
                <div class="invalid-feedback animated fadeIn"></div>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-3 mb-3">
                  <select class="form-select js-select2" name="provinsi" id="provinsi" data-placeholder="Pilih provinsi">
                    <option></option>
                    @foreach ($allProvinsi as $item)
                      <option value="{{ $item->daerah_kode }}" @if ($provinsi == $item->daerah_kode) selected @endif>
                        {{ $item->daerah_titel }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-sm-3 mb-3">
                  <select class="form-select js-select2" name="kabupaten" id="kabupaten"
                    data-placeholder="Pilih kabupaten/kota">
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-sm-3 mb-3">
                  <select class="form-select js-select2" name="kecamatan" id="kecamatan"
                    data-placeholder="Pilih kecamatan">
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-sm-3">
                  <select class="form-select js-select2" name="desa" id="desa" data-placeholder="Pilih desa">
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <textarea class="form-control" name="detail_alamat" placeholder="Detail alamat" rows="3">{{ $detail_alamat }}</textarea>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
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

    // Generate KD
    $('#nama_kd').keyup(function(e) {
      let value = $(this).val().toUpperCase().split(" ").join("");
      if (value.length <= 4) {
        $('#kode_kd_nama').val(value)

        if (value.length == 3) {
          $('#kode_kd_nama').val(value + '0')
        }
      }
    });

    // Get Kabupaten based on pemetaan
    @if ($provinsi)
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('get-kabupaten') }}",
        type: "POST",
        data: {
          provinsiId: '{{ $provinsi }}'
        },
        success: function(response) {
          var obj = JSON.parse(response);
          if (obj != '') {
            $('#kabupaten').html(obj);
            $("#kabupaten option").each(function() {
              if ($(this).val() == '{{ $kabupaten }}') {
                $(this).attr('selected', 'selected');
              }
            });

            // Get Kecamatan
            $.ajax({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: "{{ route('get-kecamatan') }}",
              type: "POST",
              data: {
                kabupatenId: '{{ $kabupaten }}'
              },
              success: function(response) {
                var obj = JSON.parse(response);
                if (obj != '') {
                  $('#kecamatan').html(obj);
                  $("#kecamatan option").each(function() {
                    if ($(this).val() == '{{ $kecamatan }}') {
                      $(this).attr('selected', 'selected');
                    }
                  });

                  // Get Desa
                  $.ajax({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('get-kelurahan') }}",
                    type: "POST",
                    data: {
                      kecamatanId: '{{ $kecamatan }}'
                    },
                    success: function(response) {
                      var obj = JSON.parse(response);
                      if (obj != '') {
                        $('#desa').html(obj);
                        $("#desa option").each(function() {
                          if ($(this).val() == '{{ $desa }}') {
                            $(this).attr('selected', 'selected');
                          }
                        });
                      }
                    }
                  });
                }
              }
            });

          }
        }
      });
    @endif

    // Submit form
    $('#inputForm').submit(function(e) {
      e.preventDefault();
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "{{ route('save.pribadi') }}",
        data: $(this).serialize(),
        success: function(response) {
          if (response.status) {
            const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-danger'
              },
            })

            swalWithBootstrapButtons.fire({
              title: '<strong>Berhasil</strong>',
              text: "Apakah ingin melanjutkan untuk mengisi Form Penjangkauan?",
              icon: 'success',
              showCancelButton: true,
              confirmButtonText: 'Iya, menuju ke Form Penjangkauan',
              cancelButtonText: 'Tidak',
              allowOutsideClick: false,
              reverseButtons: true
            }).then((result) => {
              if (result.isConfirmed) {
                window.location = '{{ route('penjangkauan') }}';
              } else if (result.dismiss === Swal.DismissReason.cancel) {
                location.reload();
              }
            })
          } else {
            $.each(response.errors, function(key, value) {
              let input = `[name = ${key}]`;
              if (value != "") {
                $(input).addClass("is-invalid").nextAll(".invalid-feedback").text(value);
                $(input).keyup(function(e) {
                  if ($(input).val() !== "") {
                    $(input).removeClass("is-invalid");
                  }
                });
                $(input).change(function(e) {
                  if ($(input).val() !== "") {
                    $(input).removeClass("is-invalid");
                  }
                });
              }
            });
          }
        },
      });
    });
  </script>
@endsection
