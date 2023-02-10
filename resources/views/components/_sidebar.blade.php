<nav id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="{{ url('/') }}">
      <span class="align-middle">IAC</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ url('/') }}">
          <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
        </a>
      </li>

      <li class="sidebar-item">
        <a class="sidebar-link" href="javascript();" data-bs-toggle="collapse" data-bs-target="#formCollapse"
          aria-expanded="false" aria-controls="formCollapse">
          <i class="align-middle" data-feather="edit"></i> <span class="align-middle">Form FSW</span>
        </a>

        <div class="collapse" id="formCollapse">
          <div class="card card-body ms-4 me-3 p-1">
            <ul class="list-items">
              <li>
                <a href="{{ url('form-fsw/data-pribadi') }}" class="text-decoration-none">Data Pribadi</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/pemetaan') }}" class="text-decoration-none">Pemetaan</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/penjangkauan') }}" class="text-decoration-none">Penjangkauan</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/rujukan-tes') }}" class="text-decoration-none">Rujukan Tes</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/cbs') }}" class="text-decoration-none">CBS</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/konfirmasi-cbs') }}" class="text-decoration-none">Konfirmasi CBS</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/temuan-kasus') }}" class="text-decoration-none">Temuan Kasus</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/inisiasi-arv') }}" class="text-decoration-none">Inisiasi ARV</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/retensi-arv') }}" class="text-decoration-none">Retensi ARV</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/reinisiasi-arv') }}" class="text-decoration-none">Reinisiasi ARV</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/partner-notifikasi') }}" class="text-decoration-none">Partner Notifikasi</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/viral-load') }}" class="text-decoration-none">Viral Load</a>
              </li>
              <li>
                <a href="{{ url('form-fsw/monitoring-psp') }}" class="text-decoration-none">Monitoring PSP+</a>
              </li>
            </ul>
          </div>
        </div>
      </li>

    </ul>

  </div>
</nav>
