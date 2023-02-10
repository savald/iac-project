@extends('main')

@section('title', 'Form Data Pribadi')
@section('message', 'Apakah ingin melanjutkan untuk mengisi Form Penjangkauan?')

@section('content')
  <div class="content">
    <div class="block block-rounded">
      <div class="block-content">
        <form id="inputForm" action="{{ route('save.penjangkauan') }}" method="POST">
          @csrf
          <input type="hidden" name="data_pribadi">
          <div class="mb-3 row">
            <label for="nama_kd" class="col-sm-2 col-form-label">Nama KD</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control @error('nama_kd') is-invalid @enderror"
                name="nama_kd" id="nama_kd" value="{{ old('nama_kd') }}">
              @error('nama_kd')
                <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="mb-3 row">
            <label for="kode_kd" class="col-sm-2 col-form-label">Kode KD</label>
            <div class="col-sm-6 col-xl-4">
              <div class="row">
                <div class="kode_kd_nama col-3 pe-0">
                  <input type="text" class="form-control @error('kode_kd_nama') is-invalid @enderror"
                    name="kode_kd_nama" id="kode_kd_nama" placeholder="NAMA" value="{{ old('kode_kd_nama') }}"
                    style="text-transform:uppercase" maxlength="4">
                  @error('kode_kd_nama')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                  @enderror
                </div>
                <div class="kode_kd_tahun col-3 px-0">
                  <select class="form-select @error('kode_kd_tahun') is-invalid @enderror" name="kode_kd_tahun"
                    id="kode_kd_tahun">
                    <option value="">TAHUN</option>
                    @foreach ($selectTahun as $tahun)
                      <option value="{{ $tahun }}" @if (old('kode_kd_tahun') == $tahun) selected @endif>
                        {{ substr($tahun, -2) }}</option>
                    @endforeach
                  </select>
                  @error('kode_kd_tahun')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                  @enderror
                </div>
                <div class="kode_kd_bulan col-3 px-0">
                  <select class="form-select @error('kode_kd_bulan') is-invalid @enderror" name="kode_kd_bulan"
                    id="kode_kd_bulan">
                    <option value="">BULAN</option>
                    @foreach ($selectBulan as $bulan)
                      <option value="{{ $bulan }}" @if (old('kode_kd_bulan') == $bulan) selected @endif>
                        {{ $bulan }}</option>
                    @endforeach
                  </select>
                  @error('kode_kd_bulan')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                  @enderror
                </div>
                <div class="kode_kd_hari col-3 ps-0">
                  <select class="form-select @error('kode_kd_hari') is-invalid @enderror" name="kode_kd_hari"
                    id="kode_kd_hari">
                    <option value="">TGL.</option>
                    @foreach ($selectHari as $hari)
                      <option value="{{ $hari }}" @if (old('kode_kd_hari') == $hari) selected @endif>
                        {{ $hari }}</option>
                    @endforeach
                  </select>
                  @error('kode_kd_hari')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="border kd_image">
                <img src="{{ asset('assets/img/KD_Format.png') }}" class="w-100" alt="kd_format">
              </div>
            </div>
          </div>
          <div class="mb-3 row align-items-baseline">
            <label class="col-sm-2 col-form-label">Tipe KD</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input @error('tipe_kd') is-invalid @enderror" type="radio" name="tipe_kd"
                  id="tipe_kd_psp" value="PSP">
                <label class="form-check-label" for="tipe_kd_psp">PSP</label>
              </div>
              <div class="form-check">
                <input class="form-check-input @error('tipe_kd') is-invalid @enderror" type="radio" name="tipe_kd"
                  id="tipe_kd_pasangan" value="Pasangan">
                <label class="form-check-label" for="tipe_kd_pasangan">Pasangan</label>
                @error('tipe_kd')
                  <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-3 mb-3">
                  <select class="form-select js-select2 @error('provinsi') is-invalid @enderror" name="provinsi"
                    id="provinsi" data-placeholder="Pilih provinsi">
                    <option></option>
                    @foreach ($provinsi as $item)
                      <option value="{{ $item->daerah_kode }}">{{ $item->daerah_titel }}</option>
                    @endforeach
                  </select>
                  @error('provinsi')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-3 mb-3">
                  <select class="form-select js-select2 @error('kabupaten') is-invalid @enderror" name="kabupaten"
                    id="kabupaten" data-placeholder="Pilih kabupaten/kota">
                  </select>
                  @error('kabupaten')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-3 mb-3">
                  <select class="form-select js-select2 @error('kecamatan') is-invalid @enderror" name="kecamatan"
                    id="kecamatan" data-placeholder="Pilih kecamatan">
                  </select>
                  @error('kecamatan')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                  @enderror
                </div>
                <div class="col-sm-3 mb-3">
                  <select class="form-select js-select2 @error('desa') is-invalid @enderror" name="desa"
                    id="desa" data-placeholder="Pilih desa">
                  </select>
                  @error('desa')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 mb-3">
                  <textarea class="form-control @error('detail_alamat') is-invalid @enderror" name="detail_alamat"
                    placeholder="Detail alamat" rows="3"></textarea>
                  @error('detail_alamat')
                    <div class="invalid-feedback animated fadeIn">{{ $message }}</div>
                  @enderror
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

    // Submit form
    // $('#inputForm').submit(function(e) {
    //   e.preventDefault();
    //   $.ajax({
    //     headers: {
    //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     },
    //     type: "POST",
    //     url: "{{ route('save.penjangkauan') }}",
    //     data: $(this).serialize(),
    //     success: function(response) {
    //       if (response.status) {
    //         console.log(response.data);
    //         // $('.modal').modal('show')
    //       } else {
    //         // console.log('fail');
    //       }
    //     }
    //   });
    // });
  </script>
@endsection
