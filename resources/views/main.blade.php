<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" href="img/icons/icon-48x48.png" />


  <title>@yield('title')</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/select2-bootstrap-5-theme.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/flatpickr.css') }}" rel="stylesheet" />
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/modules/flatpickr.js') }}"></script>
  <script src="{{ asset('assets/js/select2.min.js') }}"></script>

  @yield('style')

</head>

<body>
  <div class="wrapper">

    @include('components.sidebar')

    <div class="main">
      @include('components.navbar')

      <main class="content">
        <div class="container-fluid p-0">
          @yield('content')
        </div>
      </main>

      @include('components.footer')
    </div>
  </div>

  <script src="{{ asset('assets/js/app.js') }}"></script>

  <script>
    $(document).ready(function() {

      let activePage = window.location.pathname

      if (activePage != '/') {
        $('#formCollapse ul li a').each(function(index, link) {
          activePage = activePage.split('/').pop()
          let lastLink = link.href.split('/').pop()
          if (lastLink == activePage) {
            $(this).parent().addClass('active');
            $(this).parent().parent().parent().parent().addClass('show');
            $(this).parent().parent().parent().parent().parent().addClass('active');
          }
        });
      } else {
        $('li.sidebar-item').first().addClass('active')
      }
    });
  </script>

  @yield('scriptFooter')

</body>

</html>
