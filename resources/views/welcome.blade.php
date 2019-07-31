<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tracking Surat SP's IPB</title>
	<link rel="icon" href="{{ asset('vendor/safario/img/ipbicon.png')}}" type="image/png">

  <link rel="stylesheet" href="{{ asset('vendor/safario/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/safario/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/safario/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/safario/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/safario/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/safario/vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/safario/vendors/flat-icon/font/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('vendor/safario/vendors/nice-select/nice-select.css')}}">

  <link rel="stylesheet" href="{{ asset('vendor/safario/css/style.css')}}">
</head>
<body class="bg-shape">

  <!--================ Header Menu Area start =================-->
  <header class="header_area" style="padding-top:30px; padding-bottom:30px">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="/user"><img src="{{ asset('vendor/safario/img/logo.png')}}" alt=""></a>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html"></a></li>
              <li class="nav-item"><a class="nav-link" href="about.html"></a></li>
              <li class="nav-item"><a class="nav-link" href="package.html"></a></li>
            </ul>

            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
              <a class="button" href="/user">Coba Sekarang</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container">

      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1>Semua orang berhak mendapatkan kemudahan dalam mengakses surat </h1>
          <p style="padding-top:10px; padding-bottom:30px">ketahui posisi surat mu sekarang</p>

          <form class="search-form" method="GET" action="/resi">
            {{csrf_field()}}
            <div class="form-group">
              <div class="input-group">
                <input name="cari" type="text" value="" class="form-control" placeholder="Masukkan ID Register..">
                <div class="input-group-append">
                  <input type="submit" class="button button-hero mb-3" value="Cari surat">
                            </form>
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-8 col-xl-6 offset-xl-1">
          <img class="img-fluid" src="{{ asset('vendor/safario/img/home/ww.png')}}" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->
  <!--================Service Area Start =================-->
    <section class="section-margin generic-margin">
      <div class="container">
        <div class="section-intro text-center pb-90px">
          <img class="section-intro-img" src="{{ asset('vendor/safario/img/logo.png')}}" alt="">
          <h2>How it works?</h2>
          <p>tenang, sekarang anda tidak perlu repot lagi untuk mengecek ketersediaan surat di pelayanan mahasiswa</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="service-card text-center">
              <div class="service-card-img">
                <img class="img-fluid" src="{{ asset('vendor/safario/img/home/1.png')}}" alt="">
              </div>
              <div class="service-card-body">
                <h3>Buat Surat</h3>
                <p>Anda harus mengisi data surat di loket pelayanan mahasiswa S2. Jangan lupa untuk menyimpan Kode Registrasi surat</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="service-card text-center">
              <div class="service-card-img">
                <img class="img-fluid" src="{{ asset('vendor/safario/img/home/2.png')}}" alt="">
              </div>
              <div class="service-card-body">
                <h3>Track Surat</h3>
                <p>Dengan Kode Registrasi tadi, anda tinggal memasukkannya pada form diatas. eits, kami juga tidak lupa untuk memberikan update secara realtime melalui email IPB anda</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="service-card text-center">
              <div class="service-card-img">
                <img class="img-fluid" src="{{ asset('vendor/safario/img/home/3.png')}}" alt="">
              </div>
              <div class="service-card-body">
                <h3>Ketahui Posisi Surat</h3>
                <p>Great! Sekarang anda bisa mengetahui posisi surat dengan mudah. Silahkan menunaikan tugas belajar dengan tenang~</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================Service Area End =================-->


  <script src="{{ asset('vendor/safario/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('vendor/safario/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/safario/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('vendor/safario/vendors/nice-select/jquery.nice-select.min.js')}}"></script>
  <script src="{{ asset('vendor/safario/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{ asset('vendor/safario/js/mail-script.js')}}"></script>
  <script src="{{ asset('vendor/safario/js/skrollr.min.js')}}"></script>
  <script src="{{ asset('vendor/safario/js/main.js')}}"></script>
</body>
</html>
