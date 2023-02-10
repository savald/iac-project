@extends('main')

@section('title', 'Form Pemetaan')
@section('formType', 'Form FSW')
@section('form', 'Pemetaan')

@section('content')
  <div class="content">
    <div class="block block-rounded">
      <div class="block-content">
        <form id="inputForm">
          @csrf
          <div class="row">
            <label for="nama_hotspot" class="col-sm-2 col-form-label">Nama hotspot</label>
            <div class="col-sm-7 mb-3">
              <input type="text" class="form-control" name="nama_hotspot" id="nama_hotspot" autocomplete="off">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
            <div class="col-sm-3 mb-3">
              <div class="input-group">
                <input type="text" placeholder="Tanggal survei" class="form-control js-flatpickr" name="tgl_survei"
                  id="tgl_survei" data-date-format="d-m-Y">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
                <div class="invalid-feedback animated fadeIn"></div>
              </div>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="jumlah_psp" class="col-sm-2 col-form-label">Jumlah PSP</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="jumlah_psp" id="jumlah_psp" autocomplete="off">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-3 mb-3">
                  <select class="form-select js-select2" name="provinsi" id="provinsi" data-placeholder="Pilih provinsi">
                    <option></option>
                    @foreach ($provinsi as $item)
                      <option value="{{ $item->daerah_kode }}">{{ $item->daerah_titel }}</option>
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
                <div class="col-sm-3 mb-3">
                  <select class="form-select js-select2" name="desa" id="desa" data-placeholder="Pilih desa">
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 mb-3">
                  <textarea class="form-control" name="detail_alamat" placeholder="Detail alamat" rows="3"></textarea>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 mb-3">
                  Atau
                </div>
                <div class="col-sm-12 mb-3">
                  <button class="btn btn-primary btn-sm btn-info" type="button" onclick="getLocation()"
                    data-toggle="click-ripple">Pin
                    koordinat lokasi</button>
                </div>
                <div class="col-sm-12 col-lg-3">
                  <input type="text" class="form-control" name="koordinat" id="koordinat">
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-3">
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
    // Get Location
    function getLocation() {

      const success = position => {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        const coordinate = latitude + ', ' + longitude;

        $('#koordinat').val(coordinate)
        // $('#provinsi').val('Aceh').change();
      }

      const error = () => {
        alert('Gagal menemukan lokasi!')
      }

      navigator.geolocation.getCurrentPosition(success, error)
    }

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
        url: "{{ route('save.pemetaan') }}",
        data: $(this).serialize(),
        success: function(response) {
          if (response.status) {
            // const no = response.params.no;
            const provinsi = response.params.provinsi;
            const kabupaten = response.params.kabupaten;
            const kecamatan = response.params.kecamatan;
            const desa = response.params.desa;
            const detail_alamat = response.params.detail_alamat;
            const url =
              `/form-fsw/data-pribadi/?provinsi=${provinsi}&kabupaten=${kabupaten}&kecamatan=${kecamatan}&desa=${desa}&detail_alamat=${detail_alamat}`;

            const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                confirmButton: 'btn btn-primary',
                cancelButton: 'btn btn-danger'
              },
            })

            swalWithBootstrapButtons.fire({
              title: '<strong>Berhasil</strong>',
              text: "Apakah ingin melanjutkan untuk mengisi Form Data Pribadi?",
              icon: 'success',
              showCancelButton: true,
              confirmButtonText: 'Iya, menuju ke Form Data Pribadi',
              cancelButtonText: 'Tidak',
              allowOutsideClick: false,
              reverseButtons: true,
            }).then((result) => {
              if (result.isConfirmed) {
                // window.location = "{{ route('data-pribadi') }}";
                window.location = url;
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

                $('[name = provinsi]').change(function(e) {
                  $('[name = koordinat]').removeClass("is-invalid");
                })
              }
            });
          }
        }
      });
    });
  </script>
@endsection
