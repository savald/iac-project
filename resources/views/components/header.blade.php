<header id="page-header">
  <div class="content-header">
    <div class="d-flex align-items-center">
      <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout"
        data-action="sidebar_toggle">
        <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
      </button>
      <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block" data-toggle="layout"
        data-action="sidebar_mini_toggle">
        <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
      </button>
    </div>

    <div class="d-flex align-items-center">
      <div class="dropdown d-inline-block ms-2">
        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
          id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle" src="{{ asset('assets/media/avatars/avatar10.jpg') }}" alt="Header Avatar"
            style="width: 21px;">
          <span class="d-none d-sm-inline-block ms-2">Adminsuper</span>
          <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ms-1 mt-1"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
          aria-labelledby="page-header-user-dropdown">
          <div class="p-3 text-center bg-body-light border-bottom rounded-top">
            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar10.jpg') }}"
              alt="">
            <p class="mt-2 mb-0 fw-medium">John Smith</p>
            <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
          </div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between"
              href="be_pages_generic_profile.html">
              <span class="fs-sm fw-medium">Profile</span>
            </a>
          </div>
          <div role="separator" class="dropdown-divider m-0"></div>
          <div class="p-2">
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="op_auth_signin.html">
              <span class="fs-sm fw-medium">Log Out</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
