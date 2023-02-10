<nav id="sidebar" aria-label="Main Navigation">
  <div class="content-header">
    <a class="fw-semibold text-dual" href="{{ url('/') }}">
      <span class="smini-visible">
        <i class="fa fa-circle-notch text-primary"></i>
      </span>
      <span class="smini-hide fs-5 tracking-wider">IAC</span>
    </a>
    <div>
      <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
        <i class="far fa-moon"></i>
      </button>
      <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close"
        href="javascript:void(0)">
        <i class="fa fa-fw fa-times"></i>
      </a>
    </div>
  </div>

  <div class="js-sidebar-scroll">
    <!-- Side Navigation -->
    <div class="content-side">
      <ul class="nav-main">
        <li class="nav-main-item">
          <a class="nav-main-link" href="{{ url('/') }}">
            <i class="nav-main-link-icon si si-speedometer"></i>
            <span class="nav-main-link-name">DASHBOARD</span>
          </a>
        </li>
        <li class="nav-main-item">
          <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
            aria-expanded="false" href="#">
            <i class="nav-main-link-icon si si-note"></i>
            <span class="nav-main-link-name">FORM FSW</span>
          </a>
          <ul class="nav-main-submenu">
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('pemetaan') }}">
                <span class="nav-main-link-name">Pemetaan</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('data-pribadi') }}">
                <span class="nav-main-link-name">Data Pribadi</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('penjangkauan') }}" id="linkPenjangkauan">
                <span class="nav-main-link-name">Penjangkauan</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('rujukan-tes') }}">
                <span class="nav-main-link-name">Rujukan Tes</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('cbs') }}">
                <span class="nav-main-link-name">CBS</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('konfirmasi-cbs') }}">
                <span class="nav-main-link-name">Konfirmasi CBS</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('temuan-kasus') }}">
                <span class="nav-main-link-name">Temuan Kasus</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('inisiasi-arv') }}">
                <span class="nav-main-link-name">Inisiasi ARV</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('retensi-arv') }}">
                <span class="nav-main-link-name">Retensi ARV</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('reinisiasi-arv') }}">
                <span class="nav-main-link-name">Reinisiasi ARV</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('partner-notifikasi') }}">
                <span class="nav-main-link-name">Partner Notifikasi</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('viral-load') }}">
                <span class="nav-main-link-name">Viral Load</span>
              </a>
            </li>
            <li class="nav-main-item">
              <a class="nav-main-link" href="{{ route('monitoring-psp') }}">
                <span class="nav-main-link-name">Monitoring PSP+</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- END Side Navigation -->
  </div>
</nav>
