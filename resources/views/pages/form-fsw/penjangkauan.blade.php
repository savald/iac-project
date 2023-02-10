@extends('main')

@section('title', 'Form Penjangkauan')
@section('formType', 'Form FSW')
@section('form', 'Penjangkauan')

@section('content')
  <div class="content">
    <div class="block block-rounded">
      <div class="block-content">
        <form id="inputForm">
          @csrf
          <input type="hidden" name="no" value="{{ $no }}">
          <div class="mb-4 row">
            <label for="kode_pl" class="col-sm-2 form-label">Kode/Nama PL</label>
            <div class="col-sm-7 mb-3 mb-sm-0">
              <select class="form-select js-select2 kode_pl" name="kode_pl" id="kode_pl" data-placeholder="Pilih item">
                <option></option>
                @foreach ($users as $user)
                  <option value="{{ $user->user_id }}">{{ $user->user_first }}</option>
                @endforeach
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
          <div class="mb-4 row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <div class="row">
                <div class="col-sm-3 mb-3">
                  <select class="form-select provinsi js-select2" name="provinsi" id="provinsi"
                    data-placeholder="Pilih provinsi">
                    <option></option>
                    @foreach ($allProvinsi as $item)
                      <option value="{{ $item->daerah_kode }}" @if ($provinsi == $item->daerah_kode) selected @endif>
                        {{ $item->daerah_titel }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-sm-3 mb-3">
                  <select class="form-select kabupaten js-select2" name="kabupaten" id="kabupaten"
                    data-placeholder="Pilih kabupaten/kota">
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-sm-3 mb-3">
                  <select class="form-select kecamatan js-select2" name="kecamatan" id="kecamatan"
                    data-placeholder="Pilih kecamatan">
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-sm-3 mb-3">
                  <select class="form-select desa js-select2" name="desa" id="desa" data-placeholder="Pilih desa">
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <textarea class="form-control detail_alamat" name="detail_alamat" placeholder="Detail alamat" rows="3">{{ $detail_alamat }}</textarea>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="nama_lengkap" class="col-sm-2 form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control nama_lengkap" name="nama_lengkap" id="nama_lengkap">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="tgl_lahir" class="col-sm-2 form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <div class="input-group">
                <input type="text" placeholder="Tanggal lahir" class="form-control tgl_lahir" name="tgl_lahir"
                  id="tgl_lahir">
                <span class="input-group-text">
                  <i class="far fa-calendar-check"></i>
                </span>
                <div class="invalid-feedback animated fadeIn"></div>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="kode_kd" class="col-sm-2 col-form-label">Kode KD</label>
            <div class="col-sm-6 col-xl-4">
              <div class="row">
                <div class="col-3 pe-0">
                  <input type="text" class="form-control kode_kd_nama" name="kode_kd_nama" id="kode_kd_nama"
                    value="{{ $kd_nama }}" placeholder="NAMA" style="text-transform:uppercase" maxlength="4"
                    readonly>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-3 px-0">
                  <select class="form-select js-select2 kode_kd_tahun" name="kode_kd_tahun" id="kode_kd_tahun"
                    data-placeholder="TAHUN">
                    <option value=""></option>
                    @foreach ($listTahun as $tahun)
                      <option @if ($kd_tahun == $tahun) selected @endif>{{ substr($tahun, -2) }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-3 px-0">
                  <select class="form-select kode_kd_bulan js-select2" name="kode_kd_bulan" id="kode_kd_bulan"
                    data-placeholder="BULAN">
                    <option value=""></option>
                    @foreach ($listBulan as $bulan)
                      <option @if ($kd_bulan == $bulan) selected @endif>{{ $bulan }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-feedback animated fadeIn"></div>
                </div>
                <div class="col-3 ps-0">
                  <select class="form-select kode_kd_hari js-select2" name="kode_kd_hari" id="kode_kd_hari"
                    data-placeholder="TGL.">
                    <option value=""></option>
                    @foreach ($listHari as $hari)
                      <option @if ($kd_hari == $hari) selected @endif>{{ $hari }}</option>
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
          <div class="mb-4 row">
            <label for="nik" class="col-sm-2 form-label">NIK</label>
            <div class="col-sm-10">
              <input type="text" class="form-control nik" name="nik" id="nik">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="lokasi_kontak" class="col-sm-2 form-label">Lokasi kontak</label>
            <div class="col-sm-10">
              <select class="form-select js-select2 lokasi_kontak" name="lokasi_kontak" id="lokasi_kontak"
                data-placeholder="Pilih hotspot">
                <option></option>
                @foreach ($hotspots as $hotspot)
                  <option value="{{ $hotspot->no }}">{{ $hotspot->nama_hotspot }}</option>
                @endforeach
                <option value="lainnya">Lainnya</option>
              </select>
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="no_telepon" class="col-sm-2 form-label">No. Telp KD</label>
            <div class="col-sm-10">
              <input type="text" class="form-control no_telepon" name="no_telepon" id="no_telepon">
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="mb-4 row align-items-baseline">
            <label class="col-sm-2 form-label">Status kontak</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input status_kontak" type="radio" name="status_kontak"
                  id="status_kontak_baru" value="baru">
                <label class="form-check-label" for="status_kontak_baru">Baru</label>
              </div>
              <div class="form-check">
                <input class="form-check-input status_kontak" type="radio" name="status_kontak"
                  id="status_kontak_lama" value="lama">
                <label class="form-check-label" for="status_kontak_lama">Lama</label>
                <div class="invalid-feedback animated fadeIn"></div>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="kontak_ke" class="col-sm-2 form-label">Kontak ke</label>
            <div class="col-sm-10">
              <select class="form-select js-select2 kontak_ke" name="kontak_ke" id="kontak_ke"
                data-placeholder="Pilih item">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              <div class="invalid-feedback animated fadeIn"></div>
            </div>
          </div>
          <div class="mb-4 row">
            <label class="col-sm-2 form-label">Informasi yang diberikan</label>
            <div class="col-sm-10">
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]"
                  id="informasi_hiv" value="HIV">
                <label class="form-check-label" for="informasi_hiv">HIV</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]"
                  id="informasi_ims" value="IMS">
                <label class="form-check-label" for="informasi_ims">IMS</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]"
                  id="informasi_kespro" value="Kespro">
                <label class="form-check-label" for="informasi_kespro">Kespro</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]"
                  id="informasi_ppia" value="PPIA">
                <label class="form-check-label" for="informasi_ppia">PPIA</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]"
                  id="informasi_tb" value="TB">
                <label class="form-check-label" for="informasi_tb">TB</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]"
                  id="informasi_kesehatan_jiwa" value="Kesehatan jiwa">
                <label class="form-check-label" for="informasi_kesehatan_jiwa">Kesehatan jiwa</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input informasi_diberikan" type="checkbox" name="informasi_diberikan[]"
                  id="informasi_ipv" value="IPV">
                <label class="form-check-label" for="informasi_ipv">IPV</label>
                <div class="invalid-feedback animated fadeIn"></div>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
            <label class="col-sm-2 form-label">Skrining IPV</label>
            <div class="col-sm-10">
              <ol type="A" id="skriningIpv">
                <li>
                  <div class="mb-1 row align-items-center">
                    <label class="col-sm-12 form-label">Secara fisik mencederai?</label>
                    <div class="col-sm-12">
                      <div class="form-check">
                        <input class="form-check-input secara_fisik_mencederai" type="radio"
                          name="secara_fisik_mencederai" id="secara_fisik_mencederai_iya" value="Iya">
                        <label class="form-check-label" for="secara_fisik_mencederai_iya">Iya</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input secara_fisik_mencederai" type="radio"
                          name="secara_fisik_mencederai" id="secara_fisik_mencederai_tidak" value="Tidak">
                        <label class="form-check-label" for="secara_fisik_mencederai_tidak">Tidak</label>
                        <div class="invalid-feedback animated fadeIn"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mb-1 row align-items-center">
                    <label class="col-sm-12 form-label">Secara verbal menghina/merendahkan
                      Anda?</label>
                    <div class="col-sm-12">
                      <div class="form-check">
                        <input class="form-check-input secara_verbal_menghina" type="radio"
                          name="secara_verbal_menghina" id="secara_verbal_menghina_iya" value="Iya">
                        <label class="form-check-label" for="secara_verbal_menghina_iya">Iya</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input secara_verbal_menghina" type="radio"
                          name="secara_verbal_menghina" id="secara_verbal_menghina_tidak" value="Tidak">
                        <label class="form-check-label" for="secara_verbal_menghina_tidak">Tidak</label>
                        <div class="invalid-feedback animated fadeIn"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mb-1 row align-items-center">
                    <label class="col-sm-12 form-label">Mengancam dan membahayakan Anda?</label>
                    <div class="col-sm-12">
                      <div class="form-check">
                        <input class="form-check-input mengancam_dan_membahayakan" type="radio"
                          name="mengancam_dan_membahayakan" id="mengancam_dan_membahayakan_iya" value="Iya">
                        <label class="form-check-label" for="mengancam_dan_membahayakan_iya">Iya</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input mengancam_dan_membahayakan" type="radio"
                          name="mengancam_dan_membahayakan" id="mengancam_dan_membahayakan_tidak" value="Tidak">
                        <label class="form-check-label" for="mengancam_dan_membahayakan_tidak">Tidak</label>
                        <div class="invalid-feedback animated fadeIn"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="mb-1 row align-items-center">
                    <label class="col-sm-12 form-label">Memaksa berhubungan sex saat Anda tidak berminat?</label>
                    <div class="col-sm-12">
                      <div class="form-check">
                        <input class="form-check-input memaksa_berhubungan_sex" type="radio"
                          name="memaksa_berhubungan_sex" id="memaksa_berhubungan_sex_iya" value="Iya">
                        <label class="form-check-label" for="memaksa_berhubungan_sex_iya">Iya</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input memaksa_berhubungan_sex" type="radio"
                          name="memaksa_berhubungan_sex" id="memaksa_berhubungan_sex_tidak" value="Tidak">
                        <label class="form-check-label" for="memaksa_berhubungan_sex_tidak">Tidak</label>
                        <div class="invalid-feedback animated fadeIn"></div>
                      </div>
                    </div>
                  </div>
                </li>
              </ol>
              {{-- <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="skrining_ipv[]"
                  id="skirining_ipv_secara_fisik_mencederai" value="Mencederai secara fisik">
                <label class="form-check-label" for="skirining_ipv_mencederai_fisik">Secara fisik mencederai?</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="skrining_ipv[]" id="skirining_ipv_menghina"
                  value="Menghina dan merendahkan">
                <label class="form-check-label" for="skirining_ipv_menghina">Secara verbal menghina/merendahkan
                  Anda?</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="skrining_ipv[]" id="skrining_ipv_mengancam"
                  value="Mengancam dan membahayakan">
                <label class="form-check-label" for="skrining_ipv_mengancam">Mengancam dan membahayakan Anda?</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="skrining_ipv[]" id="skrining_ipv_berteriak"
                  value="Berteriak dan mengutuk">
                <label class="form-check-label" for="skrining_ipv_berteriak">Berteriak dan mengutuk Anda?</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" name="skrining_ipv[]"
                  id="informasi_memaksa_berhubungan" value="Memaksa berhubungan">
                <label class="form-check-label" for="informasi_memaksa_berhubungan">Memaksa berhubungan sex saat Anda
                  tidak
                  berminat?</label>
              </div> --}}
            </div>
          </div>
          <div class="mb-4 row">
            <label class="col-sm-2 form-label">Rujukan</label>
            <div class="col-sm-10">
              <div class="form-check mb-2">
                <input class="form-check-input rujukan" type="checkbox" name="rujukan[]" id="rujukan_vct"
                  value="VCT">
                <label class="form-check-label" for="rujukan_vct">VCT (statis & mobile)</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input rujukan" type="checkbox" name="rujukan[]" id="rujukan_ims"
                  value="IMS">
                <label class="form-check-label" for="rujukan_ims">IMS</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input rujukan" type="checkbox" name="rujukan[]" id="rujukan_tb"
                  value="TB">
                <label class="form-check-label" for="rujukan_tb">TB</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input rujukan" type="checkbox" name="rujukan[]" id="rujukan_cbs"
                  value="CBS">
                <label class="form-check-label" for="rujukan_cbs">CBS</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input rujukan" type="checkbox" name="rujukan[]" id="rujukan_kia"
                  value="KIA">
                <label class="form-check-label" for="rujukan_kia">KIA</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input rujukan" type="checkbox" name="rujukan[]" id="rujukan_klinik_keswa"
                  value="Klinik Keswa">
                <label class="form-check-label" for="rujukan_klinik_keswa">Klinik Keswa</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input rujukan" type="checkbox" name="rujukan[]" id="rujukan_lbh"
                  value="LBH/Paralegal">
                <label class="form-check-label" for="rujukan_lbh">LBH/Paralegal</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input rujukan" type="checkbox" name="rujukan[]" id="rujukan_P2TP2A"
                  value="P2TP2A/UPTPPA">
                <label class="form-check-label" for="rujukan_P2TP2A">P2TP2A/UPTPPA</label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input rujukan" type="checkbox" name="rujukan[]" id="rujukan_shelter"
                  value="Rumah aman/Shelter">
                <label class="form-check-label" for="rujukan_shelter">Rumah aman/Shelter</label>
                <div class="invalid-feedback animated fadeIn"></div>
              </div>
            </div>
          </div>
          <div>
            <div class="mb-2 row">
              <label class="col form-label">Jumlah alat pencegahan yang diberikan</label>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-4 mb-3">
                    <label for="jumlah_kondom" class="form-label">Kondom</label>
                    <input type="text" class="form-control jumlah_kondom" name="jumlah_kondom" id="jumlah_kondom">
                    <div class="invalid-feedback animated fadeIn"></div>
                  </div>
                  <div class="col-sm-4 mb-3">
                    <label for="jumlah_pelicin" class="form-label">Pelicin</label>
                    <input type="text" class="form-control jumlah_pelicin" name="jumlah_pelicin"
                      id="jumlah_pelicin">
                    <div class="invalid-feedback animated fadeIn"></div>
                  </div>
                  <div class="col-sm-4 mb-3">
                    <label for="jumlah_kie" class="form-label">KIE</label>
                    <input type="text" class="form-control jumlah_kie" name="jumlah_kie" id="jumlah_kie">
                    <div class="invalid-feedback animated fadeIn"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-4 row">
            <label for="nama_layanan" class="col-sm-2 form-label">Nama layanan</label>
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
    $("#tgl_lahir").flatpickr({
      dateFormat: 'd-m-Y',
      defaultDate: '01-01-2000',
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
    let nama = '';
    let tglLahir = '';
    let kodeKD;
    $('#nama').keyup(function(e) {
      let value = $(this).val().toUpperCase()
      if (value.length <= 4) {
        nama = value;
        kodeKD = nama + tglLahir;
        $('#kode_kd').val(kodeKD)
      }
    });
    $('#tanggal_lahir').change(function(e) {
      let value = $(this).val().split("-")
      let d = value[0]
      let m = value[1]
      let y = value[2].slice(-2)
      value = y + m + d
      tglLahir = value.toString()
      kodeKD = nama + tglLahir;
      $('#kode_kd').val(kodeKD)
    });

    // Submit form
    $('#inputForm').submit(function(e) {
      e.preventDefault();

      if ($('#lokasi_kontak').val() == 'lainnya') {
        $('#lokasi_kontak').addClass("is-invalid").next().next('.invalid-feedback').text('Pilih lokasi')
      } else {
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          type: "POST",
          url: "{{ route('save.penjangkauan') }}",
          data: $(this).serialize(),
          success: function(response) {
            if (response.status) {
              Swal.fire({
                title: '<strong>Berhasil</strong>',
                icon: 'success',
                html: 'Input berhasil disimpan!',
                showCloseButton: false,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText: 'Oke',
                allowOutsideClick: false,
              }).then((result) => {
                if (result.isConfirmed) {
                  window.location = "{{ url('/') }}";
                }
              })

            } else {
              $.each(response.errors, function(key, value) {
                let input = `.${key}`;
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

    // goto Form pemetaan when you select lainnya
    $('#lokasi_kontak').change(function() {
      if ($(this).val() == 'lainnya') {
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-danger'
          },
        })

        swalWithBootstrapButtons.fire({
          title: '<strong>Lainnya</strong>',
          text: "Apakah ingin menuju ke Form Pemetaan?",
          icon: 'question',
          showCancelButton: true,
          confirmButtonText: 'Iya, menuju ke Form Pemetaan',
          cancelButtonText: 'Tidak',
          allowOutsideClick: false,
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            window.open('{{ route('pemetaan') }}', '_blank');
          }
        })
      } else {
        $(this).removeClass("is-invalid")
      }
    });
  </script>
@endsection
