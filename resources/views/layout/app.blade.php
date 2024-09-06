<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GECR</title>
  <meta  content="" name="description">
  <meta  content=""  name="keywords">

  <!-- Favicons -->
  <link href="gassets/img/favicon.pn" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
  

  <!-- Main CSS File -->
 
  <link href="/assets/css/style.css" rel="stylesheet">
  
 

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <!-- =======================================================
  * Template Name: Dewi
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Updated: Jul 31 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  <style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: orchid;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: default;
        float: left;
        margin-right: 5px;
        margin-top: 5px;
        padding: 0 5px;
        color: black;
        font-weight: bold;
        font-size: 16px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: black;
        cursor: pointer;
        display: inline-block;
        font-weight: bold;
        margin-right: 2px;
    }

    .title {
        color: #1777f2;
        font-weight: bold;
    }

    .error {
        color: #FF0000;
    }

    .fixed-size {
        height: 220px;
        object-fit: cover;
    }
</style>

</head>

<body class="service-details-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="#" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">GECR PORTAL</h1>
      </a>

      

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <a class="cta-btn" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      
    </div>
  </header>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.webp);">
      <div class="container position-relative">
        @yield('heading')
        
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">
         @yield('content')
        </div>

      </div>

    </section><!-- /Service Details Section -->
   
 
  </main>
  @include('layout.footer')
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Preloader -->
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}

  <!-- Main JS File -->
  <script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "order": []
        });
        $('#myTable2').DataTable({
            "order": []
        });
        $('#myTable3').DataTable({
            "order": []
        });
        $('#myTable4').DataTable({
            "order": []
        });
        $('#myTable5').DataTable({
            "order": []
        });
    });
</script>
 
</body>

</html>