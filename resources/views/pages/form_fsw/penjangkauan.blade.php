@extends('main')

@section('title', 'Form Penjangkauan')

@section('style')
  <style>
    #skriningIpv {
      padding-left: 1.3rem;
    }

    #tanggal_edukasi,
    #tanggal_lahir {
      background-color: white;
    }
  </style>
@endsection

@section('content')
  <h1 class="h3 mb-3"><strong>Form Penjangkauan</strong></h1>

  <div class="row">
    <div class="col">
      <div class="card flex-fill w-100">
        <div class="card-body">
          <form id="inputForm">
            <div class="row">
              <label for="kode_pl" class="col-sm-2 col-form-label">Kode nama PL</label>
              <div class="col-sm-7 mb-3">
                <select class="form-select form-select-sm" name="kode_pl" id="kode_pl">
                  <option selected>Pilih item</option>
                </select>
              </div>
              <div class="col-sm-3 mb-3">
                <div class="input-group">
                  <input type="text" placeholder="Tanggal edukasi" class="form-control" name="tanggal_edukasi"
                    id="tanggal_edukasi" autocomplete="off">
                  <span class="input-group-text">
                    <i class="align-middle" data-feather="calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="kabupaten" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <select class="form-select form-select-sm" name="kabupaten" id="kabupaten">
                  <option selected>Pilih kabupaten/kota</option>
                </select>
              </div>
            </div>
            <div class="row">
              <label for="nama" class="col-sm-2 col-form-label">Nama lengkap</label>
              <div class="col-sm-7 mb-3">
                <input type="text" class="form-control" name="nama" id="nama">
              </div>
              <div class="col-sm-3 mb-3">
                <div class="input-group">
                  <input type="text" placeholder="Tanggal lahir" class="form-control" name="tanggal_lahir"
                    id="tanggal_lahir">
                  <span class="input-group-text">
                    <i class="align-middle" data-feather="calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            {{-- <div class="mb-3 row">
              <label for="namaKD" class="col-sm-2 col-form-label">Nama Lengkap</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="namaKD" class="col-sm-2 col-form-label">Tanggal lahir</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
              </div>
            </div> --}}
            <div class="mb-3 row">
              <label for="kode_kd" class="col-sm-2 col-form-label">Kode KD</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_kd" id="kode_kd">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="nik" class="col-sm-2 col-form-label">NIK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nik" id="nik">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="lokasi_kontak" class="col-sm-2 col-form-label">Lokasi kontak</label>
              <div class="col-sm-10">
                <select class="form-select form-select-sm" name="lokasi_kontak" id="lokasi_kontak">
                  <option selected>Pilih item</option>
                  <option>Lainnya</option>
                </select>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="nik" class="col-sm-2 col-form-label">No. Telp KD</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nik" id="nik">
              </div>
            </div>
            <div class="mb-3 row align-items-center">
              <label class="col-sm-2 col-form-label">Status kontak</label>
              <div class="col-sm-10">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status_kontak" id="status_kontak_baru"
                    value="baru">
                  <label class="form-check-label" for="status_kontak_baru">Baru</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status_kontak" id="status_kontak_lama"
                    value="lama">
                  <label class="form-check-label" for="status_kontak_lama">Lama</label>
                </div>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="kontak_ke" class="col-sm-2 col-form-label">Kontak ke</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kontak_ke" id="kontak_ke">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Informasi yang diberikan</label>
              <div class="col-sm-10">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="informasi_diberikan[]" id="informasi_hiv"
                    value="HIV">
                  <label class="form-check-label" for="informasi_hiv">HIV</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="informasi_diberikan[]" id="informasi_ims"
                    value="IMS">
                  <label class="form-check-label" for="informasi_ims">IMS</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="informasi_diberikan[]" id="informasi_kespro"
                    value="Kespro">
                  <label class="form-check-label" for="informasi_kespro">Kespro</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="informasi_diberikan[]" id="informasi_ppia"
                    value="PPIA">
                  <label class="form-check-label" for="informasi_ppia">PPIA</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="informasi_diberikan[]" id="informasi_tb"
                    value="TB">
                  <label class="form-check-label" for="informasi_tb">TB</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="informasi_diberikan[]"
                    id="informasi_kesehatan_jiwa" value="Kesehatan jiwa">
                  <label class="form-check-label" for="informasi_kesehatan_jiwa">Kesehatan jiwa</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="informasi_diberikan[]" id="informasi_ipv"
                    value="IPV">
                  <label class="form-check-label" for="informasi_ipv">IPV</label>
                </div>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Skrining IPV</label>
              <div class="col-sm-10">
                <ol type="A" id="skriningIpv">
                  <li>
                    <div class="mb-1 row align-items-center">
                      <label class="col-sm-12 col-form-label">Secara fisik mencederai?</label>
                      <div class="col-sm-12">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="mencederai_fisik"
                            id="mencederai_fisik_iya" value="Iya">
                          <label class="form-check-label" for="mencederai_fisik_iya">Iya</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="mencederai_fisik"
                            id="mencederai_fisik_tidak" value="Tidak">
                          <label class="form-check-label" for="mencederai_fisik_tidak">Tidak</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="mb-1 row align-items-center">
                      <label class="col-sm-12 col-form-label">Secara verbal menghina/merendahkan
                        Anda?</label>
                      <div class="col-sm-12">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="menghina_merendahkan"
                            id="menghina_merendahkan_iya" value="Iya">
                          <label class="form-check-label" for="menghina_merendahkan_iya">Iya</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="menghina_merendahkan"
                            id="menghina_merendahkan_tidak" value="Tidak">
                          <label class="form-check-label" for="menghina_merendahkan_tidak">Tidak</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="mb-1 row align-items-center">
                      <label class="col-sm-12 col-form-label">Mengancam dan membahayakan Anda?</label>
                      <div class="col-sm-12">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="mengancam_membahayakan"
                            id="mengancam_membahayakan_iya" value="Iya">
                          <label class="form-check-label" for="mengancam_membahayakan_iya">Iya</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="mengancam_membahayakan"
                            id="mengancam_membahayakan_tidak" value="Tidak">
                          <label class="form-check-label" for="mengancam_membahayakan_tidak">Tidak</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="mb-1 row align-items-center">
                      <label class="col-sm-12 col-form-label">Memaksa berhubungan sex saat Anda tidak berminat?</label>
                      <div class="col-sm-12">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="memaksa_sex" id="memaksa_sex_iya"
                            value="Iya">
                          <label class="form-check-label" for="memaksa_sex_iya">Iya</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="memaksa_sex" id="memaksa_sex_tidak"
                            value="Tidak">
                          <label class="form-check-label" for="memaksa_sex_tidak">Tidak</label>
                        </div>
                      </div>
                    </div>
                  </li>
                </ol>
                {{-- <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="skrining_ipv[]"
                    id="skirining_ipv_mencederai_fisik" value="Mencederai secara fisik">
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
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Rujukan</label>
              <div class="col-sm-10">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="rujukan[]" id="rujukan_vct" value="VCT">
                  <label class="form-check-label" for="rujukan_vct">VCT (statis & mobile)</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="rujukan[]" id="rujukan_ims" value="IMS">
                  <label class="form-check-label" for="rujukan_ims">IMS</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="rujukan[]" id="rujukan_tb" value="TB">
                  <label class="form-check-label" for="rujukan_tb">TB</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="rujukan[]" id="rujukan_cbs" value="CBS">
                  <label class="form-check-label" for="rujukan_cbs">CBS</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="rujukan[]" id="rujukan_kia" value="KIA">
                  <label class="form-check-label" for="rujukan_kia">KIA</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="rujukan[]" id="rujukan_klinik_keswa"
                    value="Klinik Keswa">
                  <label class="form-check-label" for="rujukan_klinik_keswa">Klinik Keswa</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="rujukan[]" id="rujukan_lbh"
                    value="LBH/Paralegal">
                  <label class="form-check-label" for="rujukan_lbh">LBH/Paralegal</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="rujukan[]" id="rujukan_P2TP2A"
                    value="P2TP2A/UPTPPA">
                  <label class="form-check-label" for="rujukan_P2TP2A">P2TP2A/UPTPPA</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" name="rujukan[]" id="rujukan_shelter"
                    value="Rumah aman/Shelter">
                  <label class="form-check-label" for="rujukan_shelter">Rumah aman/Shelter</label>
                </div>
              </div>
            </div>
            <div>
              <div class="mb-2 row">
                <label class="col mt-3">Jumlah alat pencegahan yang diberikan</label>
              </div>
              <div class="mb-3 row justify-content-end">
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-sm-4">
                      <label for="jumlah_kondom" class="col-form-label">Kondom</label>
                      <input type="text" class="form-control" name="jumlah_kondom" id="jumlah_kondom">
                    </div>
                    <div class="col-sm-4">
                      <label for="jumlah_pelicin" class="col-form-label">Pelicin</label>
                      <input type="text" class="form-control" name="jumlah_pelicin" id="jumlah_pelicin">
                    </div>
                    <div class="col-sm-4">
                      <label for="jumlah_kie" class="col-form-label">KIE</label>
                      <input type="text" class="form-control" name="jumlah_kie" id="jumlah_kie">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="nama_layanan" class="col-sm-2 col-form-label">Nama layanan</label>
              <div class="col-sm-10">
                <select class="form-select form-select-sm" name="nama_layanan" id="nama_layanan">
                  <option selected>Pilih item</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 d-flex justify-content-end">
                <button class="btn btn-primary">Simpan</button>
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
    $("#tanggal_edukasi, #tanggal_lahir").flatpickr({
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

    $('#kabupaten, #kode_pl, #lokasi_kontak, #nama_layanan').select2({
      theme: 'bootstrap-5',
      selectionCssClass: "select2--small",
      dropdownCssClass: "select2--small",
    })

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
