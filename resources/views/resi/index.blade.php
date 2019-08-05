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
<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="/user"><img src="{{ asset('vendor/safario/img/left-arrow.png')}}" alt=""></a>
          <a class="navbar-brand logo_h" href="#"><img src="{{ asset('vendor/safario/img/logo.png')}}" alt=""></a>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html"></a></li>
              <li class="nav-item"><a class="nav-link" href="about.html"></a></li>
              <li class="nav-item"><a class="nav-link" href="package.html"></a></li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->



  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Rincian Pencarian</h1>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->

  <div class="main-content" style="padding-left:30px;padding-right:30px">
    <div class="container-fluid">
      <div class="form-row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                    {{session('sukses')}}
                  </div>
              @endif
            </div>
            <div class="panel-body">
              <table class="table table-striped">
              {{csrf_field()}}
                <thead>
                  <tr>
                    <th style="color:#696969">ID Register</th>
                    <th style="color:#696969">NRP</th>
                    <th style="color:#696969">Jenis Surat</th>
                    <th style="color:#696969">Status Surat</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_surat as $surat)
                    <tr>
                      <td style="color:#333333">{{$surat->id_proses}}</td>
                      <td style="color:#333333">{{$surat->nrp}}</td>
                      <td style="color:#333333">{{$surat->jenis_surat}}</td>
                      <td style="color:#333333">{{$surat->status}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

              <table class="table table-striped">
              {{csrf_field()}}
                <thead>
                  <tr>
                    <th style="color:#696969">History Process</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data_surat as $surat)
                    <tr>
                    <td style="color:#333333">[SURAT MASUK] {{$surat->created_at}}</td> </tr>  
                    <tr>
                    <td style="color:#333333">[MENUNGGU DI TANDA TANGANI] {{$surat->updated_at}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div >
  </div>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/skrollr.min.js"></script>
  <!-- <script src="js/countdown.js"></script> -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
