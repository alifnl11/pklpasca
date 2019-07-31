<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Persuratan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="https://kit.fontawesome.com/88912c150c.js"></script>
  
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="{{asset('images/mini_logo.png')}}"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{asset('images/logo.png')}}"></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-bell"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li> 
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{asset('images/profile.png')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Admin Penyuratan</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{asset('images/profile.png')}}" class="img-circle" alt="User Image">
                  <p>Admin Penyuratan<br><small>ID834859</small>  <p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/profile.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin Penyuratan</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-mail-bulk"></i> <span>&nbsp Status Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="far fa-circle"></i>&nbsp Admin Loket</a></li>
            <li><a href="pages/forms/advanced.html"><i class="far fa-circle"></i>&nbsp Admin TTD Pimpinan</a></li>
            <li><a href="pages/forms/editors.html"><i class="far fa-circle"></i>&nbsp Admin Penomoran Surat</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms Arsip</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="arsip"><i class="far fa-circle"></i>Input Arsip</a></li>
            <li><a href="list"><i class="far fa-circle"></i> Daftar Arsip</a></li>
          </ul>
        </li>

        <li class="treeview">
            <a href="#">
            <i class="fas fa-history"></i> <span>&nbsp Histori</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="pages/forms/general.html"><i class="far fa-circle"></i>&nbsp Surat Pengajuan</a></li>
              <li><a href="pages/forms/general.html"><i class="far fa-circle"></i>&nbsp Surat Pengambilan</a></li>
            </ul>
          </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Edit Arsip
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <section class="content">
    <div class="container">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach($errors-> all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
    </div>
    @endif
    
<form method="post" action="{{ route('arsip.update', $arsip->id) }}">
    {{csrf_field()}}
    <fieldset>
        <div class="form-group">
          <label class="col-form-label" for="inputDefault">ID_Pelayanan Loket</label>
        <input type="text" name="id_loket" class="form-control-md-8" placeholder="" id="inputDefault" autocomplete="off" autofocus value="{{ $arsip->id_loket }}">
        </div>
        <fieldset class="form-group">
        <label>Jenis Surat</label>
        <div class="custom-control custom-radio">
            <label class="custom-control-label">
            <input type="radio" class="custom-control-input" name="jenis_surat" id="optionsRadios1" value="Surat Pelayanan SPs" @if($arsip->jenis_surat == 'Surat Pelayanan SPs') checked='' @endif onclick="suratPelayananSPs()" >
            Surat Pelayanan SPs
            </label>
        </div>
        <div class="custom-control custom-radio">
        <label class="custom-control-label">
            <input type="radio" class="form-check-input" name="jenis_surat" id="optionsRadios2" value="Surat Keperluan Lain" @if($arsip->jenis_surat == 'Surat Keperluan Lain') checked='' @endif onclick="suratPelayananLainnya()">
            Surat Keperluan Lain
            </label>
        </div>
        </fieldset>

        <div class="form-group" id="pilihansuratlayananSps">
        <label for="exampleSelect2">Surat Pelayanan SPs</label>
        <select class="myselect" id="tags-select" name="surat_pelayanan_sps">
            <option value=""  @if($arsip->surat_pelayanan_sps == '') selected @endif></option>
            <option value="Kartu Tanda Mahasiswa" @if($arsip->surat_pelayanan_sps == 'Kartu Tanda Mahasiswa') selected @endif>Kartu Tanda Mahasiswa</option>
            <option value="Form Rencana Studi" @if($arsip->surat_pelayanan_sps == 'Form Rencana Studi') selected @endif>Form Rencana Studi</option>
            <option value="Lembar Hasil Studi" @if($arsip->surat_pelayanan_sps == 'Lembar Hasil Studi') selected @endif>Lembar Hasil Studi</option>
            <option value="SK Pembimbingan" @if($arsip->surat_pelayanan_sps == 'SK Pembimbingan') selected @endif>SK Pembimbingan</option> 
            <option value="Surat Keterangan Aktif" @if($arsip->surat_pelayanan_sps == 'Surat Keterangan Aktif') selected @endif>Surat Keterangan Aktif</option>
            <option value="Surat Izin Prapenelitian" @if($arsip->surat_pelayanan_sps == 'Surat Izin Prapenelitian') selected @endif>Surat Izin Prapenelitian</option>
            <option value="Surat Izin Penelitian" @if($arsip->surat_pelayanan_sps == 'Surat Izin Penelitian') selected @endif>Surat Izin Penelitian</option>
            <option value="Pengesahan Proposal" @if($arsip->surat_pelayanan_sps == 'Pengesahan Proposal') selected @endif>Pengesahan Proposal</option>
            <option value="Legalisasi Proposal" @if($arsip->surat_pelayanan_sps == 'Legalisasi Proposal') selected @endif>Legalisasi Proposal</option>
            <option value="Surat Izin Cuti Akademik" @if($arsip->surat_pelayanan_sps == 'Surat Izin Cuti Akademik') selected @endif>Surat Izin Cuti Akademik</option>
            <option value="Surat Aktif Kembali dari Cuti Akademik" @if($arsip->surat_pelayanan_sps == 'Surat Aktif Kembali dari Cuti Akademik') selected @endif>Surat Aktif Kembali dari Cuti Akademik</option>
            <option value="Surat Undangan Ujian Kualifikasi (Prelim Lisan)" @if($arsip->surat_pelayanan_sps == 'Surat Undangan Ujian Kualifikasi (Prelim Lisan)') selected @endif>Surat Undangan Ujian Kualifikasi (Prelim Lisan)</option>
            <option value="Surat Keterangan Kemajuan Studi" @if($arsip->surat_pelayanan_sps == 'Surat Keterangan Kemajuan Studi') selected @endif>Surat Keterangan Kemajuan Studi</option>
            <option value="Sasaran Kerja Pegawai (SKP)" @if($arsip->surat_pelayanan_sps == 'Sasaran Kerja Pegawai (SKP)') selected @endif>Sasaran Kerja Pegawai (SKP)</option>
            <option value="Surat pengantar ke Mandiri" @if($arsip->surat_pelayanan_sps == 'Surat pengantar ke Mandiri') selected @endif>Surat pengantar ke Mandiri</option>
            <option value="Undangan Sidang Komisi" @if($arsip->surat_pelayanan_sps == 'Undangan Sidang Komisi') selected @endif>Undangan Sidang Komisi</option>
            <option value="Undangan Seminar" @if($arsip->surat_pelayanan_sps == 'Undangan Seminar') selected @endif>Undangan Seminar</option>
            <option value="Undangan Ujian Tesis" @if($arsip->surat_pelayanan_sps == 'Undangan Ujian Tesis') selected @endif>Undangan Ujian Tesis</option>
            <option value="Undangan Ujian Tertutup" @if($arsip->surat_pelayanan_sps == 'Undangan Ujian Tertutup') selected @endif>Undangan Ujian Tertutup</option>
            <option value="Undangan Sidang Promosi S3" @if($arsip->surat_pelayanan_sps == 'Undangan Sidang Promosi S3') selected @endif>Undangan Sidang Promosi S3</option>
            <option value="Pengesahan Tesis" @if($arsip->surat_pelayanan_sps == 'Pengesahan Tesis') selected @endif>Pengesahan Tesis</option>
            <option value="Pengesahan Disertasi" @if($arsip->surat_pelayanan_sps == 'Pengesahan Disertasi') selected @endif>Pengesahan Disertasi</option>
            <option value="Surat Keterangan Lulus" @if($arsip->surat_pelayanan_sps == 'Surat Keterangan Lulus') selected @endif>Surat Keterangan Lulus</option>
            <option value="Translate Ijazah/Transkrip" @if($arsip->surat_pelayanan_sps == 'Translate Ijazah/Transkrip') selected @endif>Translate Ijazah/Transkrip</option>
            <option value="Legalisasi Ijazah/Transkrip" @if($arsip->surat_pelayanan_sps == 'Legalisasi Ijazah/Transkrip') selected @endif>Legalisasi Ijazah/Transkrip</option>
            <option value="Surat Penyerahan Kembali ke Instansi" @if($arsip->surat_pelayanan_sps == 'Surat Penyerahan Kembali ke Instansi') selected @endif>Surat Penyerahan Kembali ke Instansi</option>
            <option value="Sertifikat IP4" @if($arsip->surat_pelayanan_sps == 'Sertifikat IP4') selected @endif>Sertifikat IP4</option>
            <option value="Surat Permohonan Pembuatan Visa" @if($arsip->surat_pelayanan_sps == 'Surat Permohonan Pembuatan Visa') selected @endif>Surat Permohonan Pembuatan Visa</option>
            <option value="Surat Rekomendasi" @if($arsip->surat_pelayanan_sps == 'Surat Rekomendasi') selected @endif>Surat Rekomendasi </option>
            <option value="Surat Pengunduran Diri" @if($arsip->surat_pelayanan_sps == 'Surat Pengunduran Diri') selected @endif>Surat Pengunduran Diri</option>
            <option value="Surat Permohonan Pindah Program Studi" @if($arsip->surat_pelayanan_sps == 'Surat Permohonan Pindah Program Studi') selected @endif>Surat Permohonan Pindah Program Studi</option>
            <option value="Perbaikan Transkrip" @if($arsip->surat_pelayanan_sps == 'Perbaikan Transkrip') selected @endif>Perbaikan Transkrip </option>
            <option value="Perbaikan Ijazah Indonesia/Inggris" @if($arsip->surat_pelayanan_sps == 'Perbaikan Ijazah Indonesia/Inggris') selected @endif>Perbaikan Ijazah Indonesia/Inggris</option>
            <option value="Salinan Ijazah/Transkrip Indonesia" @if($arsip->surat_pelayanan_sps == 'Salinan Ijazah/Transkrip Indonesia') selected @endif>Salinan Ijazah/Transkrip Indonesia</option>
            <option value="Salinan Translate Ijazah/Transkrip Inggris" @if($arsip->surat_pelayanan_sps == 'Salinan Translate Ijazah/Transkrip Inggris') selected @endif>Salinan Translate Ijazah/Transkrip Inggris</option>
            <option value="Surat Keterangan Tidak Menerima Beasiswa" @if($arsip->surat_pelayanan_sps == 'Surat Keterangan Tidak Menerima Beasiswa') selected @endif>Surat Keterangan Tidak Menerima Beasiswa</option>
            <option value="Surat Rekomendasi Bantuan Beasiswa" @if($arsip->surat_pelayanan_sps == 'Surat Rekomendasi Bantuan Beasiswa') selected @endif>Surat Rekomendasi Bantuan Beasiswa</option>
            <option value="Surat Keterangan Lulus Proposal" @if($arsip->surat_pelayanan_sps == 'Surat Keterangan Lulus Proposal') selected @endif>Surat Keterangan Lulus Proposal</option>
            <option value="Surat Permohonan Penarikan SPP" @if($arsip->surat_pelayanan_sps == 'Surat Permohonan Penarikan SPP') selected @endif>Surat Permohonan Penarikan SPP</option>
            <option value="Permohonan Pembuatan Transkrip" @if($arsip->surat_pelayanan_sps == 'Permohonan Pembuatan Transkrip') selected @endif>Permohonan Pembuatan Transkrip</option>
            <option value="Surat Izin Tidak Mengikuti Perkuliahan" @if($arsip->surat_pelayanan_sps == 'Surat Izin Tidak Mengikuti Perkuliahan') selected @endif>Surat Izin Tidak Mengikuti Perkuliahan</option>
            <option value="Surat Keterangan Pernah Kuliah" @if($arsip->surat_pelayanan_sps == 'Surat Keterangan Pernah Kuliah') selected @endif>Surat Keterangan Pernah Kuliah</option>
            <option value="Surat Ijin /Keterangan Sandwich" @if($arsip->surat_pelayanan_sps == 'Surat Ijin /Keterangan Sandwich') selected @endif>Surat Ijin /Keterangan Sandwich</option>
            <option value="Surat Pernyataan Beasiswa" @if($arsip->surat_pelayanan_sps == 'Surat Pernyataan Beasiswa') selected @endif>Surat Pernyataan Beasiswa</option>
            <option value="Surat Perpanjangan Masa Studi" @if($arsip->surat_pelayanan_sps == 'Surat Perpanjangan Masa Studi') selected @endif>Surat Perpanjangan Masa Studi</option>
            <option value="Surat Rekomendasi Kandidat Doktor" @if($arsip->surat_pelayanan_sps == 'Surat Rekomendasi Kandidat Doktor') selected @endif>Surat Rekomendasi Kandidat Doktor</option>
            <option value="Surat Perpanjangan Tugas Belajar" @if($arsip->surat_pelayanan_sps == 'Surat Perpanjangan Tugas Belajar') selected @endif>Surat Perpanjangan Tugas Belajar</option>
            <option value="Surat Rekomendasi Bantuan Biaya Penelitian" @if($arsip->surat_pelayanan_sps == 'Surat Rekomendasi Bantuan Biaya Penelitian') selected @endif>Surat Rekomendasi Bantuan Biaya Penelitian</option>
            <option value="Surat Rekomendasi Perpanjangan Beasiswa" @if($arsip->surat_pelayanan_sps == 'Surat Rekomendasi Perpanjangan Beasiswa') selected @endif>Surat Rekomendasi Perpanjangan Beasiswa</option>
            <option value="Surat Rekomendasi Hibah Doktor" @if($arsip->surat_pelayanan_sps == 'Surat Rekomendasi Hibah Doktor') selected @endif>Surat Rekomendasi Hibah Doktor</option>
            <option value="Surat Keterangan Tarif Nol Rupiah" @if($arsip->surat_pelayanan_sps == 'Surat Keterangan Tarif Nol Rupiah') selected @endif>Surat Keterangan Tarif Nol Rupiah</option>
            <option value="Surat Keterangan/Pernyataan" @if($arsip->surat_pelayanan_sps == 'Surat Keterangan/Pernyataan') selected @endif>Surat Keterangan/Pernyataan</option>
            <option value="Predikat Kelulusan" @if($arsip->surat_pelayanan_sps == 'Predikat Kelulusan') selected @endif>Predikat Kelulusan</option>
            <option value="Surat Keterangan Belum dapat SKL" @if($arsip->surat_pelayanan_sps == 'Surat Keterangan Belum dapat SKL') selected @endif>Surat Keterangan Belum dapat SKL</option>
            <option value="Surat Pernyataan Penyelesaian Studi" @if($arsip->surat_pelayanan_sps == 'Surat Pernyataan Penyelesaian Studi') selected @endif>Surat Pernyataan Penyelesaian Studi</option>
            <option value="Surat Pengantar Ke Laboratorium/Sempel" @if($arsip->surat_pelayanan_sps == 'Surat Pengantar Ke Laboratorium/Sempel') selected @endif>Surat Pengantar Ke Laboratorium/Sempel</option>
            <option value="Berita Acara Hasil Sidkom" @if($arsip->surat_pelayanan_sps == 'Berita Acara Hasil Sidkom') selected @endif>Berita Acara Hasil Sidkom</option>
            <option value="Berita Acara Ujian Tesis" @if($arsip->surat_pelayanan_sps == 'Berita Acara Ujian Tesis') selected @endif>Berita Acara Ujian Tesis</option>
            <option value="Berita Acara Ujian Prelim" @if($arsip->surat_pelayanan_sps == 'Berita Acara Ujian Prelim') selected @endif>Berita Acara Ujian Prelim</option>
            <option value="Berita Acara Ujian Tertutup" @if($arsip->surat_pelayanan_sps == 'Berita Acara Ujian Tertutup') selected @endif>Berita Acara Ujian Tertutup</option>
            <option value="Berita Acara Sidang Promosi" @if($arsip->surat_pelayanan_sps == 'Berita Acara Sidang Promosi') selected @endif>Berita Acara Sidang Promosi</option>
            <option value="Tanda Terima Penilaian Proposal" @if($arsip->surat_pelayanan_sps == 'Tanda Terima Penilaian Proposal') selected @endif>Tanda Terima Penilaian Proposal</option>
            <option value="Tanda Terima Penilaian Publikasi /Jurnal" @if($arsip->surat_pelayanan_sps == 'Tanda Terima Penilaian Publikasi /Jurnal') selected @endif>Tanda Terima Penilaian Publikasi /Jurnal</option>
            <option value="Surat Rekomendasi tidak Menerima Bantuan Biaya Penelitian" @if($arsip->surat_pelayanan_sps == 'Surat Rekomendasi tidak Menerima Bantuan Biaya Penelitian') selected @endif>Surat Rekomendasi tidak Menerima Bantuan Biaya Penelitian</option>
            <option value="Legalisir Tesis/Disertasi" @if($arsip->surat_pelayanan_sps == 'Legalisir Tesis/Disertasi') selected @endif>Legalisir Tesis/Disertasi</option>
            <option value="Surat Pengantar Izin Membimbing" @if($arsip->surat_pelayanan_sps == 'Surat Pengantar Izin Membimbing') selected @endif>Surat Pengantar Izin Membimbing</option>
            <option value="Linieritas Program Studi" @if($arsip->surat_pelayanan_sps == 'Linieritas Program Studi') selected @endif>Linieritas Program Studi</option>
        </select>
        </div>
    

        <div class="form-group" id="suratpelayananlainnya" >
        <label class="col-form-label" for="inputDefault">Surat Pelayanan Lainnya</label>
        <input type="text" name="surat_pelayanan_lainnya" value="{{ $arsip->surat_pelayanan_lainnya }}" class="form-control" placeholder="" id="inputDefault" autocomplete="off">
        </div>

                   

        <fieldset class="form-group" id="tujuansuratsps">
        <label>Tujuan Surat Keluar Pelayanan SPs</label>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="tujuan_surat_keluar" id="mahasiswa1" value="Pribadi/Personal" @if($arsip->tujuan_surat_keluar == 'Pribadi/Personal') checked='' @endif onclick="tujuanmahasiswasps()">
            Pribadi/Personal
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="tujuan_surat_keluar" id="pribadipersonal1" value="Mahasiswa" @if($arsip->tujuan_surat_keluar == 'Mahasiswa') checked='' @endif onclick="tujuanpribadisps()">
            Mahasiswa
            </label>
        </div>
        </fieldset>

        <div class="form-group" id="nrp">
        <label>Data Mahasiswa</label>
        <label class="col-form-label" for="inputDefault">NRP</label>
        <input type="text" name="nrp" class="form-control" placeholder="" id="inputDefault" autocomplete="off" value="{{ $arsip->nrp }}">
        </div>

        <div class="form-group">
        <label for="exampleSelect2">Rincian Tujuan Surat Keluar</label>
        <select  class="myselect" id="tags-select" name="rincian_tujuan_surat">
            <option value="" @if($arsip->rincian_tujuan_surat == '') selected @endif></option>
            <option value="Mahasiswa yang Bersangkutan" @if($arsip->rincian_tujuan_surat == 'Mahasiswa yang Bersangkutan') selected @endif>Mahasiswa yang Bersangkutan</option>
            <option value="Komisi Penguji" @if($arsip->rincian_tujuan_surat == 'Komisi Penguji') selected @endif>Komisi Penguji</option>
            <option value="Komisi Pembimbing" @if($arsip->rincian_tujuan_surat == 'Komisi Pembimbing') selected @endif>Komisi Pembimbing</option>
            <option value="Dekan Sekolah Pascasarjana IPB" @if($arsip->rincian_tujuan_surat == 'Dekan Sekolah Pascasarjana IPB') selected @endif>Dekan Sekolah Pascasarjana IPB</option>
            <option value="Pimpinan Sidang Promosi Terbuka S3" @if($arsip->rincian_tujuan_surat == 'Pimpinan Sidang Promosi Terbuka S3') selected @endif>Pimpinan Sidang Promosi Terbuka S3</option>
            <option value="Kepala Biro Umum, Sarana dan Prasarana" @if($arsip->rincian_tujuan_surat == 'Kepala Biro Umum, Sarana dan Prasarana') selected @endif>Kepala Biro Umum, Sarana dan Prasarana</option>
            <option value="Direktur Program Internasional" @if($arsip->rincian_tujuan_surat == 'Direktur Program Internasional') selected @endif>Direktur Program Internasional</option>
            <option value="Ketua Peogram Studi Multidisiplin" @if($arsip->rincian_tujuan_surat == 'Ketua Peogram Studi Multidisiplin') selected @endif>Ketua Peogram Studi Multidisiplin</option>
            <option value="Direktur Administrasi Pendidikan IPB" @if($arsip->rincian_tujuan_surat == 'Direktur Administrasi Pendidikan IPB') selected @endif>Direktur Administrasi Pendidikan IPB</option>
            <option value="Direktur Keuangan dan Akuntansi IPB" @if($arsip->rincian_tujuan_surat == 'Direktur Keuangan dan Akuntansi IPB') selected @endif>Direktur Keuangan dan Akuntansi IPB</option>
            <option value="Direktur Sumber Daya Manusia IPB" @if($arsip->rincian_tujuan_surat == 'Direktur Sumber Daya Manusia IPB') selected @endif>Direktur Sumber Daya Manusia IPB</option>
            <option value="Direktur Sistem Informasi dan Transformasi Digital IPB" @if($arsip->rincian_tujuan_surat == 'Direktur Sistem Informasi dan Transformasi Digital IPB') selected @endif>Direktur Sistem Informasi dan Transformasi Digital IPB</option>
            <option value="Ketua Program Studi MB IPB" @if($arsip->rincian_tujuan_surat == 'Ketua Program Studi MB IPB') selected @endif>Ketua Program Studi MB IPB</option>
            <option value="Dekan Sekolah Bisnis" @if($arsip->rincian_tujuan_surat == 'Dekan Sekolah Bisnis') selected @endif>Dekan Sekolah Bisnis</option>
            <option value="Rektor" @if($arsip->rincian_tujuan_surat == 'Rektor') selected @endif>Rektor</option>
            <option value="Wakil Rektor Bidang Pendidikan dan Kemahasiswaan" @if($arsip->rincian_tujuan_surat == 'Wakil Rektor Bidang Pendidikan dan Kemahasiswaan') selected @endif>Wakil Rektor Bidang Pendidikan dan Kemahasiswaan</option>
            <option value="Wakil Rektor Bidang Sumberdaya, Perencanaan dan Keuangan" @if($arsip->rincian_tujuan_surat == 'Wakil Rektor Bidang Sumberdaya, Perencanaan dan Keuangan') selected @endif>Wakil Rektor Bidang Sumberdaya, Perencanaan dan Keuangan</option>
            <option value="Wakil Rektor Bidang Kerjasama dan Sistem Informasi" @if($arsip->rincian_tujuan_surat == 'Wakil Rektor Bidang Kerjasama dan Sistem Informasi') selected @endif>Wakil Rektor Bidang Kerjasama dan Sistem Informasi</option>
            <option value="Wakil Rektor Bidang Inovasi, Bisnis dan Kewirausahaan" @if($arsip->rincian_tujuan_surat == 'Wakil Rektor Bidang Inovasi, Bisnis dan Kewirausahaan') selected @endif>Wakil Rektor Bidang Inovasi, Bisnis dan Kewirausahaan</option>
            <option value="Sekretaris Institut" @if($arsip->rincian_tujuan_surat == 'Sekretaris Institut') selected @endif>Sekretaris Institut</option>
            <option value="Kantor Manajemen Mutu dan Audit Internal" @if($arsip->rincian_tujuan_surat == 'Kantor Manajemen Mutu dan Audit Internal') selected @endif>Kantor Manajemen Mutu dan Audit Internal</option>
            <option value="Biro Komunikasi" @if($arsip->rincian_tujuan_surat == 'Biro Komunikasi') selected @endif>Biro Komunikasi</option>
            <option value="Biro Legislasi dan Pelayanan Hukum" @if($arsip->rincian_tujuan_surat == 'Biro Legislasi dan Pelayanan Hukum') selected @endif>Biro Legislasi dan Pelayanan Hukum</option>
            <option value="Direktorat Pengembangan Program dan Teknologi Pendidikan" @if($arsip->rincian_tujuan_surat == 'Direktorat Pengembangan Program dan Teknologi Pendidikan') selected @endif>Direktorat Pengembangan Program dan Teknologi Pendidikan</option>
            <option value="Direktorat Perencanaan, Pemonitoran dan Evaluasi" @if($arsip->rincian_tujuan_surat == 'Direktorat Perencanaan, Pemonitoran dan Evaluasi') selected @endif>Direktorat Perencanaan, Pemonitoran dan Evaluasi</option>
            <option value="Direktorat Kerjasama dan Hubungan Alumni" @if($arsip->rincian_tujuan_surat == 'Direktorat Kerjasama dan Hubungan Alumni') selected @endif>Direktorat Kerjasama dan Hubungan Alumni</option>
            <option value="Direktorat Program Internasional" @if($arsip->rincian_tujuan_surat == 'Direktorat Program Internasional') selected @endif>Direktorat Program Internasional</option>
            <option value="Direktorat Bisnis dan Manajemen Aset Komersial" @if($arsip->rincian_tujuan_surat == 'Direktorat Bisnis dan Manajemen Aset Komersial') selected @endif>Direktorat Bisnis dan Manajemen Aset Komersial</option>
            <option value="Direktorat Inovasi dan Kewirausahaan" @if($arsip->rincian_tujuan_surat == 'Direktorat Inovasi dan Kewirausahaan') selected @endif>Direktorat Inovasi dan Kewirausahaan</option>
            <option value="Program Pendidikan Kompetensi Umum" @if($arsip->rincian_tujuan_surat == 'Program Pendidikan Kompetensi Umum') selected @endif>Program Pendidikan Kompetensi Umum</option>
            <option value="Lembaga Pengembangan Institut" @if($arsip->rincian_tujuan_surat == 'Lembaga Pengembangan Institut') selected @endif>Lembaga Pengembangan Institut</option>
            <option value="Lembaga Penelitian dan Pengabdian Kepada Masyarakat" @if($arsip->rincian_tujuan_surat == 'Lembaga Penelitian dan Pengabdian Kepada Masyarakat') selected @endif>Lembaga Penelitian dan Pengabdian Kepada Masyarakat</option>
            <option value="Unit Pelatihan Bahasa" @if($arsip->rincian_tujuan_surat == 'Unit Pelatihan Bahasa') selected @endif>Unit Pelatihan Bahasa</option>
            <option value="Unit Olahraga dan Seni" @if($arsip->rincian_tujuan_surat == 'Unit Olahraga dan Seni') selected @endif>Unit Olahraga dan Seni</option>
            <option value="Unit Transportasi Kampus" @if($arsip->rincian_tujuan_surat == 'Unit Transportasi Kampus') selected @endif>Unit Transportasi Kampus</option>
            <option value="Unit Keamanan Kampus (UKK)" @if($arsip->rincian_tujuan_surat == 'Unit Keamanan Kampus (UKK)') selected @endif>Unit Keamanan Kampus (UKK)</option>
            <option value="Unit Kesehatan" @if($arsip->rincian_tujuan_surat == 'Unit Kesehatan') selected @endif>Unit Kesehatan</option>
            <option value="Unit Pengadaan" @if($arsip->rincian_tujuan_surat == 'Unit Pengadaan') selected @endif>Unit Pengadaan</option>
            <option value="Unit Arsip" @if($arsip->rincian_tujuan_surat == 'Unit Arsip') selected @endif>Unit Arsip</option>
            <option value="Tujuan Surat Keluar lain" @if($arsip->rincian_tujuan_surat == 'Tujuan Surat Keluar lain') selected @endif>Tujuan Surat Keluar lain</option>
        </select>
        </div>

        <div class="form-group">
        <label class="col-form-label" for="inputDefault">Tujuan Surat Keluar Lainnya</label>
        <input type="text" name="tujuan_surat_keluar_lainnya" value="{{ $arsip->tujuan_surat_keluar_lainnya }}" class="form-control" placeholder="" id="inputDefault" autocomplete="off">
        </div>

        <div class="form-group">
        <label for="exampleSelect2">Kode Surat</label>
        <select class="myselect" id="tags-select" name="kode_surat">
            <option value="" @if($arsip->kode_surat == '') selected @endif></option>
            <option value="AK - Data dan Informasi Akademik" @if($arsip->kode_surat == 'AK - Data dan Informasi Akademik') selected @endif>AK - Data dan Informasi Akademik</option>
            <option value="DL - Pendidikan dan Pelatihan" @if($arsip->kode_surat == 'DL - Pendidikan dan Pelatihan') selected @endif>DL - Pendidikan dan Pelatihan</option>
            <option value="DT - Tata Pamong Perguruan Tinggi" @if($arsip->kode_surat == 'DT - Tata Pamong Perguruan Tinggi') selected @endif>DT - Tata Pamong Perguruan Tinggi</option>
            <option value="HK - Hukum" @if($arsip->kode_surat == 'HK - Hukum') selected @endif>HK - Hukum</option>
            <option value="KM - Kemahasiswaan" @if($arsip->kode_surat == 'KM - Kemahasiswaan') selected @endif>KM - Kemahasiswaan</option>
            <option value="KP - Kepegawaian" @if($arsip->kode_surat == 'KP - Kepegawaian') selected @endif>KP - Kepegawaian</option>
            <option value="KS - Kerjasama" @if($arsip->kode_surat == 'KS - Kerjasama') selected @endif>KS - Kerjasama</option>
            <option value="KU - Keuangan" @if($arsip->kode_surat == 'KU - Keuangan') selected @endif>KU - Keuangan</option>
            <option value="LK - Perlengkapan" @if($arsip->kode_surat == 'LK - Perlengkapan') selected @endif>LK - Perlengkapan</option>
            <option value="OT - Organisasi dan Ketatalaksanaan" @if($arsip->kode_surat == 'OT - Organisasi dan Ketatalaksanaan') selected @endif>OT - Organisasi dan Ketatalaksanaan</option>
            <option value="PG - Pengkajian dan Pengembangan" @if($arsip->kode_surat == 'PG - Pengkajian dan Pengembangan') selected @endif>PG - Pengkajian dan Pengembangan</option>
            <option value="PM - Pengabdian Kepada Masyarakat" @if($arsip->kode_surat == 'PM - Pengabdian Kepada Masyarakat') selected @endif>PM - Pengabdian Kepada Masyarakat</option>
            <option value="PN - Penelitian" @if($arsip->kode_surat == 'PN - Penelitian') selected @endif>PN - Penelitian</option>
            <option value="PP - Pendidikan dan Pengajaran" @if($arsip->kode_surat == 'PP - Pendidikan dan Pengajaran') selected @endif>PP - Pendidikan dan Pengajaran</option>
            <option value="RT - Kerumahtanggaan" @if($arsip->kode_surat == 'RT - Kerumahtanggaan') selected @endif>RT - Kerumahtanggaan</option>
            <option value="TI - Informasi/SIM/TIK" @if($arsip->kode_surat == 'TI - Informasi/SIM/TIK') selected @endif>TI - Informasi/SIM/TIK</option>
            <option value="TU - Ketatausahaan" @if($arsip->kode_surat == 'TU - Ketatausahaan') selected @endif>TU - Ketatausahaan</option>
            <option value="WS - Pengawasan" @if($arsip->kode_surat == 'WS - Pengawasan') selected @endif>WS - Pengawasan</option>
            <option value="PR - Perencanaan" @if($arsip->kode_surat == 'PR - Perencanaan') selected @endif>PR - Perencanaan</option>
        </select>
        </div>

        

        <fieldset class="form-group">
        <label>Pengirim Surat Keluar</label>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="dekansps" value="Dekan SPs" @if($arsip->pengirim_Surat_Keluar == 'Dekan SPs') checked='' @endif>
            Dekan SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="wakildekansps" value="Wakil Dekan SPs" @if($arsip->pengirim_Surat_Keluar == 'Wakil Dekan SPs') checked='' @endif>
            Wakil Dekan SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="sekretarisprogramdoktor" value="Sekretaris Program Doktor (S3)" @if($arsip->pengirim_Surat_Keluar == 'Sekretaris Program Doktor (S3)') checked='' @endif>
            Sekretaris Program Doktor (S3)
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="sekretarisprogrammagister" value="Sekretaris Program Magister (S2)" @if($arsip->pengirim_Surat_Keluar == 'Sekretaris Program Magister (S2)') checked='' @endif>
            Sekretaris Program Magister (S2)
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="kepalatatausahasps" value="Kepala Tata Usaha SPs" @if($arsip->pengirim_Surat_Keluar == 'Kepala Tata Usaha SPs') checked='' @endif>
            Kepala Tata Usaha SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="pimpinansidangpromositerbukas3" value="Pimpinan Sidang Promosi Terbuka S3" @if($arsip->pengirim_Surat_Keluar == 'Pimpinan Sidang Promosi Terbuka S3') checked='' @endif>
            Pimpinan Sidang Promosi Terbuka S3
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="pengirimlainnya" value="Pengirim Lainnya" onclick="tulispengirimlain()" @if($arsip->pengirim_Surat_Keluar == 'Pengirim Lainnya') checked='' @endif>
            Pengirim Lainnya
            </label>
        </div>
        </fieldset>

        <div class="form-group" id="pengirimlain">
        <label class="col-form-label" for="inputDefault">Keterangan Pengirim Surat Keluar</label>
        <input type="text" name="keterangan_pengirim_surat_keluar" value="{{ $arsip->keterangan_pengirim_surat_keluar }}" class="form-control" placeholder="" id="inputDefault" autocomplete="off">
        </div>

        <div class="form-group">
        <label for="exampleInputFile">Unggah Berkas Surat</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file" value="{{ $arsip->file }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </fieldset>
    <script type="text/javascript">
          $(".myselect").select2();
    </script>
    
    <script>
      function suratPelayananSPs() {
        if(document.getElementById('optionsRadios1').checked){
          document.getElementById('rincianjenissurat').style.display='none';
          document.getElementById('tujuansuratpelayananlain').style.display='none';
                    
        }else{
          document.getElementById('rincianjenissurat').style.display='block';
          document.getElementById('tujuansuratpelayananlain').style.display='block';
        }
      }

      function suratPelayananLainnya() {
        if(document.getElementById('optionsRadios2').checked){
          document.getElementById('pilihansuratlayananSps').style.display='none';
          document.getElementById('suratpelayananlainnya').style.display='none';
          document.getElementById('tujuansuratsps').style.display='none';
          document.getElementById('tulisSuratSPslain').style.display='none';
          
          
        }else{
          document.getElementById('pilihansuratlayananSps').style.display='block';
          document.getElementById('suratpelayananlainnya').style.display='block';
          document.getElementById('tujuansuratsps').style.display='block';
          document.getElementById('tulisSuratSPslain').style.display='block';
         
        }
      }
      

      function tujuanmahasiswasps() {
        if(document.getElementById('mahasiswa1').checked){
          document.getElementById('nrp').style.display='block';        
        }else{
          document.getElementById('nrp').style.display='none';
        }
      }

      function tujuanpribadisps() {
        if(document.getElementById('pribadipersonal1').checked){
          document.getElementById('nrp').style.display='none';        
        }else{
          document.getElementById('nrp').style.display='block';
        }
      }

      function tujuanmahasiswasps() {
        if(document.getElementById('mahasiswa2').checked){
          document.getElementById('nrp').style.display='block';        
        }else{
          document.getElementById('nrp').style.display='none';
        }
      }

      function tujuanpribadisps() {
        if(document.getElementById('pribadipersonal2').checked){
          document.getElementById('nrp').style.display='none';        
        }else{
          document.getElementById('nrp').style.display='block';
        }
      }

      function tujuandirektorat() {
        if(document.getElementById('direktoratkantorunit').checked){
          document.getElementById('nrp').style.display='none';        
        }else{
          document.getElementById('nrp').style.display='block';
        }
      }

      function tulispengirimlain() {
        if(document.getElementById('pengirimlainnya').checked){
          document.getElementById('pengirimlain').style.display='block';        
        }else{
          document.getElementById('pengirimlain').style.display='none';
        }
      }

    </script>
    
    </form>
</div>
       
</section>

    </section>
    <!-- /.content -->
  </div>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>