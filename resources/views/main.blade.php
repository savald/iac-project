<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Icons -->
  <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
  <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
  <!-- END Icons -->

  <!-- Stylesheets -->
  <!-- Page JS Plugins CSS -->
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/js/plugins/sweetalert2/sweetalert2.min.css') }}">

  <!-- OneUI framework -->
  <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }}">

</head>

<body>
  <div id="page-container"
    class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    @include('components.sidebar')
    <!-- END Sidebar -->

    <!-- Header -->
    @include('components.header')
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
      <!-- Hero -->
      @include('components.hero')
      <!-- END Hero -->

      <!-- Page Content -->
      @yield('content')
      <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    @include('components.footer')
    <!-- END Footer -->
  </div>
  <!-- END Page Container -->
  {{-- @include('components.modal') --}}


  <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>

  <!-- jQuery (required for BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
  <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

  <!-- Page JS Plugins -->
  <script src="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <script>
    One.helpersOnLoad(['js-flatpickr', 'jq-select2']);

    $(document).ready(function() {

      /* ------------------------- Active link for sidebar ------------------------ */
      let currentUrl = '{{ url()->current() }}';

      if (currentUrl != '/') {
        $('.nav-main-item ul li a').each(function(index, link) {
          let activePage = link.href

          if (activePage == currentUrl) {
            $(this).addClass('active');
            $(this).parent().parent().parent().addClass('open');
          }
        });
      } else {
        $('.nav-main-item a.nav-main-link').first().addClass('active')
      }

      /* ------------------------- Popup for penjangkauan ------------------------- */
      @if (!session()->has('to_penjangkauan'))
        $('#linkPenjangkauan').click(function(e) {
          e.preventDefault();

          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-primary',
              cancelButton: 'btn btn-danger'
            },
          })

          swalWithBootstrapButtons.fire({
            title: '<strong>Gagal</strong>',
            text: "Anda harus mengisi Form Data Pribadi untuk menuju Form ini?",
            icon: 'error',
            showCancelButton: true,
            confirmButtonText: 'Menuju ke Form Pribadi',
            cancelButtonText: 'Tidak',
            allowOutsideClick: false,
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              window.location = "{{ route('data-pribadi') }}";
            }
          })
        })
      @endif
    });
  </script>

  @yield('scriptFooter')
</body>

</html>
