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
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="public/css/bootstrap.css">
 
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
      <span class="logo-mini"><img src="images/mini_logo.png"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="images/logo.png"></span>
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
              <img src="images/profile.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Admin Penyuratan</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="images/profile.png" class="img-circle" alt="User Image">
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
       Formulir Surat Keluar
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
    
    <form method="post" action="arsip/store" >
    {{csrf_field()}}
    <fieldset>
        <div class="form-group">
          <label class="col-form-label" for="inputDefault">ID_Pelayanan Loket</label>
          <input type="text" name="id_loket" class="form-control-md-8" placeholder="" id="inputDefault" autocomplete="off" autofocus>
        </div>
        <fieldset class="form-group">
        <label>Jenis Surat</label>
        <div class="custom-control custom-radio">
            <label class="custom-control-label">
            <input type="radio" class="custom-control-input" name="jenis_surat" id="optionsRadios1" value="Surat Pelayanan SPs" onclick="suratPelayananSPs()">
            Surat Pelayanan SPs
            </label>
        </div>
        <div class="custom-control custom-radio">
        <label class="custom-control-label">
            <input type="radio" class="form-check-input" name="jenis_surat" id="optionsRadios2" value="Surat Keperluan Lain" onclick="suratPelayananLainnya()">
            Surat Keperluan Lain
            </label>
        </div>
        </fieldset>

        <div class="form-group" id="pilihansuratlayananSps">
        <label for="exampleSelect2">Surat Pelayanan SPs</label>
        <select class="myselect" id="tags-select" name="surat_pelayanan_sps">
            <option value=""></option>
            <option value="Kartu Tanda Mahasiswa">Kartu Tanda Mahasiswa</option>
            <option value="Form Rencana Studi">Form Rencana Studi</option>
            <option value="Lembar Hasil Studi">Lembar Hasil Studi</option>
            <option value="SK Pembimbingan">SK Pembimbingan</option> 
            <option value="Surat Keterangan Aktif">Surat Keterangan Aktif</option>
            <option value="Surat Izin Prapenelitian">Surat Izin Prapenelitian</option>
            <option value="Surat Izin Penelitian">Surat Izin Penelitian</option>
            <option value="Pengesahan Proposal">Pengesahan Proposal</option>
            <option value="Legalisasi Proposal">Legalisasi Proposal</option>
            <option value="Surat Izin Cuti Akademik">Surat Izin Cuti Akademik</option>
            <option value="Surat Aktif Kembali dari Cuti Akademik">Surat Aktif Kembali dari Cuti Akademik</option>
            <option value="Surat Undangan Ujian Kualifikasi (Prelim Lisan)">Surat Undangan Ujian Kualifikasi (Prelim Lisan)</option>
            <option value="Surat Keterangan Kemajuan Studi">Surat Keterangan Kemajuan Studi</option>
            <option value="Sasaran Kerja Pegawai (SKP)">Sasaran Kerja Pegawai (SKP)</option>
            <option value="Surat pengantar ke Mandiri">Surat pengantar ke Mandiri</option>
            <option value="Undangan Sidang Komisi">Undangan Sidang Komisi</option>
            <option value="Undangan Seminar">Undangan Seminar</option>
            <option value="Undangan Ujian Tesis">Undangan Ujian Tesis</option>
            <option value="Undangan Ujian Tertutup">Undangan Ujian Tertutup</option>
            <option value="Undangan Sidang Promosi S3">Undangan Sidang Promosi S3</option>
            <option value="Pengesahan Tesis">Pengesahan Tesis</option>
            <option value="Pengesahan Disertasi">Pengesahan Disertasi</option>
            <option value="Surat Keterangan Lulus">Surat Keterangan Lulus</option>
            <option value="Translate Ijazah/Transkrip">Translate Ijazah/Transkrip</option>
            <option value="Legalisasi Ijazah/Transkrip">Legalisasi Ijazah/Transkrip</option>
            <option value="Surat Penyerahan Kembali ke Instansi">Surat Penyerahan Kembali ke Instansi</option>
            <option value="Sertifikat IP4">Sertifikat IP4</option>
            <option value="Surat Permohonan Pembuatan Visa">Surat Permohonan Pembuatan Visa</option>
            <option value="Surat Rekomendasi">Surat Rekomendasi </option>
            <option value="Surat Pengunduran Diri">Surat Pengunduran Diri</option>
            <option value="Surat Permohonan Pindah Program Studi">Surat Permohonan Pindah Program Studi</option>
            <option value="Perbaikan Transkrip">Perbaikan Transkrip </option>
            <option value="Perbaikan Ijazah Indonesia/Inggris">Perbaikan Ijazah Indonesia/Inggris</option>
            <option value="Salinan Ijazah/Transkrip Indonesia">Salinan Ijazah/Transkrip Indonesia</option>
            <option value="Salinan Translate Ijazah/Transkrip Inggris">Salinan Translate Ijazah/Transkrip Inggris</option>
            <option value="Surat Keterangan Tidak Menerima Beasiswa">Surat Keterangan Tidak Menerima Beasiswa</option>
            <option value="Surat Rekomendasi Bantuan Beasiswa">Surat Rekomendasi Bantuan Beasiswa</option>
            <option value="Surat Keterangan Lulus Proposal">Surat Keterangan Lulus Proposal</option>
            <option value="Surat Permohonan Penarikan SPP">Surat Permohonan Penarikan SPP</option>
            <option value="Permohonan Pembuatan Transkrip">Permohonan Pembuatan Transkrip</option>
            <option value="Surat Izin Tidak Mengikuti Perkuliahan">Surat Izin Tidak Mengikuti Perkuliahan</option>
            <option value="Surat Keterangan Pernah Kuliah">Surat Keterangan Pernah Kuliah</option>
            <option value="Surat Ijin /Keterangan Sandwich">Surat Ijin /Keterangan Sandwich</option>
            <option value="Surat Pernyataan Beasiswa">Surat Pernyataan Beasiswa</option>
            <option value="Surat Perpanjangan Masa Studi">Surat Perpanjangan Masa Studi</option>
            <option value="Surat Rekomendasi Kandidat Doktor">Surat Rekomendasi Kandidat Doktor</option>
            <option value="Surat Perpanjangan Tugas Belajar">Surat Perpanjangan Tugas Belajar</option>
            <option value="Surat Rekomendasi Bantuan Biaya Penelitian">Surat Rekomendasi Bantuan Biaya Penelitian</option>
            <option value="Surat Rekomendasi Perpanjangan Beasiswa">Surat Rekomendasi Perpanjangan Beasiswa</option>
            <option value="Surat Rekomendasi Hibah Doktor">Surat Rekomendasi Hibah Doktor</option>
            <option value="Surat Ketrangan Tarif Nol Rupiah">Surat Ketrangan Tarif Nol Rupiah</option>
            <option value="Surat Keterangan/Pernyataan">Surat Keterangan/Pernyataan</option>
            <option value="Predikat Kelulusan">Predikat Kelulusan</option>
            <option value="Surat Keterangan Belum dapat SKL">Surat Keterangan Belum dapat SKL</option>
            <option value="Surat Pernyataan Penyelesaian Studi">Surat Pernyataan Penyelesaian Studi</option>
            <option value="Surat Pengantar Ke Laboratorium/Sempel">Surat Pengantar Ke Laboratorium/Sempel</option>
            <option value="Berita Acara Hasil Sidkom">Berita Acara Hasil Sidkom</option>
            <option value="Berita Acara Ujian Tesis">Berita Acara Ujian Tesis</option>
            <option value="Berita Acara Ujian Prelim">Berita Acara Ujian Prelim</option>
            <option value="Berita Acara Ujian Tertutup">Berita Acara Ujian Tertutup</option>
            <option value="Berita Acara Sidang Promosi">Berita Acara Sidang Promosi</option>
            <option value="Tanda Terima Penilaian Proposal">Tanda Terima Penilaian Proposal</option>
            <option value="Tanda Terima Penilaian Publikasi /Jurnal">Tanda Terima Penilaian Publikasi /Jurnal</option>
            <option value="Surat Rekomendasi tidak Menerima Bantuan Biaya Penelitian">Surat Rekomendasi tidak Menerima Bantuan Biaya Penelitian</option>
            <option value="Legalisir Tesis/Disertasi">Legalisir Tesis/Disertasi</option>
            <option value="Surat Pengantar Izin Membimbing">Surat Pengantar Izin Membimbing</option>
            <option value="Linieritas Program Studi">Linieritas Program Studi</option>
        </select>
        </div>
    
        <div class="form-check" id="tulisSuratSPslain">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="" id="suratspslainnyaa" onclick="suratPelayananSpsLainnya()">
          Lainnya
        </label>
        </div>

        <div class="form-group" id="suratpelayananlainnya" style="display:none;">
        <label class="col-form-label" for="inputDefault">Surat Pelayanan Lainnya</label>
        <input type="text" name="surat_pelayanan_lainnya" class="form-control" placeholder="" id="inputDefault" autocomplete="off">
        </div>

        <div class="form-group" id="rincianjenissurat">
        <label class="col-form-label" for="inputDefault">Rincian Jenis Surat</label>
        <input type="text" name="rincian_jenis_surat" class="form-control" placeholder="" autocomplete="off" >
        </div>

             

        <fieldset class="form-group" id="tujuansuratsps">
        <label>Tujuan Surat Keluar Pelayanan SPs</label>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="tujuan_surat_keluar" id="mahasiswa1" value="Pribadi/Personal" onclick="tujuanmahasiswasps()">
            Pribadi/Personal
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="tujuan_surat_keluar" id="pribadipersonal1" value="Mahasiswa" onclick="tujuanpribadisps()">
            Mahasiswa
            </label>
        </div>
        </fieldset>

        <fieldset class="form-group" id="tujuansuratpelayananlain">
            <label>Tujuan Surat</label>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="tujuan_surat" id="mahasiswa2" value="Mahasiswa" onclick="tujuanmahasiswasps()">
                Mahasiswa
                </label>
                </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="tujuan_surat" id="direktoratkantorunit" value="Direktorat/Kantor/Unit" onclick="tujuandirektorat()">
                Direktorat/Kantor/Unit
                </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="tujuan_surat" id="pribadipersonal2" value="Pribadi/Personal" onclick="tujuanpribadisps()">
                Pribadi/Personal
                </label>
            </div>
        </fieldset>

        <div class="form-group" id="nrp" style="display:none;">
        <label>Data Mahasiswa</label>
        <label class="col-form-label" for="inputDefault">NRP</label>
        <input type="text" name="nrp" class="form-control" placeholder="" id="inputDefault" autocomplete="off">
        </div>

        <div class="form-group">
        <label for="exampleSelect2">Rincian Tujuan Surat Keluar</label>
        <select  class="myselect" id="tags-select" name="rincian_tujuan_surat">
            <option value=""></option>
            <option value="Mahasiswa yang Bersangkutan">Mahasiswa yang Bersangkutan</option>
            <option value="Komisi Penguji">Komisi Penguji</option>
            <option value="Komisi Pembimbing">Komisi Pembimbing</option>
            <option value="Dekan Sekolah Pascasarjana IPB">Dekan Sekolah Pascasarjana IPB</option>
            <option value="Pimpinan Sidang Promosi Terbuka S3">Pimpinan Sidang Promosi Terbuka S3</option>
            <option value="Kepala Biro Umum, Sarana dan Prasarana">Kepala Biro Umum, Sarana dan Prasarana</option>
            <option value="Direktur Program Internasional">Direktur Program Internasional</option>
            <option value="Ketua Peogram Studi Multidisiplin">Ketua Peogram Studi Multidisiplin</option>
            <option value="Direktur Administrasi Pendidikan IPB">Direktur Administrasi Pendidikan IPB</option>
            <option value="Direktur Keuangan dan Akuntansi IPB">Direktur Keuangan dan Akuntansi IPB</option>
            <option value="Direktur Sumber Daya Manusia IPB">Direktur Sumber Daya Manusia IPB</option>
            <option value="Direktur Sistem Informasi dan Transformasi Digital IPB">Direktur Sistem Informasi dan Transformasi Digital IPB</option>
            <option value="Ketua Program Studi MB IPB">Ketua Program Studi MB IPB</option>
            <option value="Dekan Sekolah Bisnis">Dekan Sekolah Bisnis</option>
            <option value="Rektor">Rektor</option>
            <option value="Wakil Rektor Bidang Pendidikan dan Kemahasiswaan">Wakil Rektor Bidang Pendidikan dan Kemahasiswaan</option>
            <option value="Wakil Rektor Bidang Sumberdaya, Perencanaan dan Keuangan">Wakil Rektor Bidang Sumberdaya, Perencanaan dan Keuangan</option>
            <option value="Wakil Rektor Bidang Kerjasama dan Sistem Informasi">Wakil Rektor Bidang Kerjasama dan Sistem Informasi</option>
            <option value="Wakil Rektor Bidang Inovasi, Bisnis dan Kewirausahaan">Wakil Rektor Bidang Inovasi, Bisnis dan Kewirausahaan</option>
            <option value="Sekretaris Institut">Sekretaris Institut</option>
            <option value="Kantor Manajemen Mutu dan Audit Internal">Kantor Manajemen Mutu dan Audit Internal</option>
            <option value="Biro Komunikasi">Biro Komunikasi</option>
            <option value="Biro Legislasi dan Pelayanan Hukum">Biro Legislasi dan Pelayanan Hukum</option>
            <option value="Direktorat Pengembangan Program dan Teknologi Pendidikan">Direktorat Pengembangan Program dan Teknologi Pendidikan</option>
            <option value="Direktorat Perencanaan, Pemonitoran dan Evaluasi">Direktorat Perencanaan, Pemonitoran dan Evaluasi</option>
            <option value="Direktorat Kerjasama dan Hubungan Alumni">Direktorat Kerjasama dan Hubungan Alumni</option>
            <option value="Direktorat Program Internasional">Direktorat Program Internasional</option>
            <option value="Direktorat Bisnis dan Manajemen Aset Komersial">Direktorat Bisnis dan Manajemen Aset Komersial</option>
            <option value="Direktorat Inovasi dan Kewirausahaan">Direktorat Inovasi dan Kewirausahaan</option>
            <option value="Program Pendidikan Kompetensi Umum">Program Pendidikan Kompetensi Umum</option>
            <option value="Lembaga Pengembangan Institut">Lembaga Pengembangan Institut</option>
            <option value="Lembaga Penelitian dan Pengabdian Kepada Masyarakat">Lembaga Penelitian dan Pengabdian Kepada Masyarakat</option>
            <option value="Unit Pelatihan Bahasa">Unit Pelatihan Bahasa</option>
            <option value="Unit Olahraga dan Seni">Unit Olahraga dan Seni</option>
            <option value="Unit Transportasi Kampus">Unit Transportasi Kampus</option>
            <option value="Unit Keamanan Kampus (UKK)">Unit Keamanan Kampus (UKK)</option>
            <option value="Unit Kesehatan">Unit Kesehatan</option>
            <option value="Unit Pengadaan">Unit Pengadaan</option>
            <option value="Unit Arsip">Unit Arsip</option>
            <option value="Tujuan Surat Keluar lain">Tujuan Surat Keluar lain</option>
        </select>
        </div>

        <div class="form-group">
        <label class="col-form-label" for="inputDefault">Tujuan Surat Keluar Lainnya</label>
        <input type="text" name="tujuan_surat_keluar_lainnya" class="form-control" placeholder="" id="inputDefault" autocomplete="off">
        </div>

        <div class="form-group">
        <label for="exampleSelect2">Kode Surat</label>
        <select class="myselect" id="tags-select" name="kode_surat">
            <option value=""></option>
            <option value="AK - Data dan Informasi Akademik">AK - Data dan Informasi Akademik</option>
            <option value="DL - Pendidikan dan Pelatihan">DL - Pendidikan dan Pelatihan</option>
            <option value="DT - Tata Pamong Perguruan Tinggi">DT - Tata Pamong Perguruan Tinggi</option>
            <option value="HK - Hukum">HK - Hukum</option>
            <option value="KM - Kemahasiswaan">KM - Kemahasiswaan</option>
            <option value="KP - Kepegawaian">KP - Kepegawaian</option>
            <option value="KS - Kerjasama">KS - Kerjasama</option>
            <option value="KU - Keuangan">KU - Keuangan</option>
            <option value="LK - Perlengkapan">LK - Perlengkapan</option>
            <option value="OT - Organisasi dan Ketatalaksanaan">OT - Organisasi dan Ketatalaksanaan</option>
            <option value="PG - Pengkajian dan Pengembangan">PG - Pengkajian dan Pengembangan</option>
            <option value="PM - Pengabdian Kepada Masyarakat">PM - Pengabdian Kepada Masyarakat</option>
            <option value="PN - Penelitian">PN - Penelitian</option>
            <option value="PP - Pendidikan dan Pengajaran">PP - Pendidikan dan Pengajaran</option>
            <option value="RT - Kerumahtanggaan">RT - Kerumahtanggaan</option>
            <option value="TI - Informasi/SIM/TIK">TI - Informasi/SIM/TIK</option>
            <option value="TU - Ketatausahaan">TU - Ketatausahaan</option>
            <option value="WS - Pengawasan">WS - Pengawasan</option>
            <option value="PR - Perencanaan">PR - Perencanaan</option>
        </select>
        </div>

        

        <fieldset class="form-group">
        <label>Pengirim Surat Keluar</label>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="dekansps" value="Dekan SPs">
            Dekan SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="wakildekansps" value="Wakil Dekan SPs">
            Wakil Dekan SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="sekretarisprogramdoktor" value="Sekretaris Program Doktor (S3)">
            Sekretaris Program Doktor (S3)
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="sekretarisprogrammagister" value="Sekretaris Program Magister (S2)">
            Sekretaris Program Magister (S2)
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="kepalatatausahasps" value="Kepala Tata Usaha SPs">
            Kepala Tata Usaha SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="pimpinansidangpromositerbukas3" value="Pimpinan Sidang Promosi Terbuka S3">
            Pimpinan Sidang Promosi Terbuka S3
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="pengirimlainnya" value="Pengirim Lainnya" onclick="tulispengirimlain()">
            Pengirim Lainnya
            </label>
        </div>
        </fieldset>

        <div class="form-group" id="pengirimlain" style="display:none;">
        <label class="col-form-label" for="inputDefault">Keterangan Pengirim Surat Keluar</label>
        <input type="text" name="keterangan_pengirim_surat_keluar" class="form-control" placeholder="" id="inputDefault" autocomplete="off">
        </div>

        <div class="form-group">
        <label for="exampleInputFile">Unggah Berkas Surat</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
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
      
      function suratPelayananSpsLainnya() {
        if(document.getElementById('suratspslainnyaa').checked){
          document.getElementById('suratpelayananlainnya').style.display='block';        
        }else{
          document.getElementById('suratpelayananlainnya').style.display='none';
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
  <!-- /.content-wrapper -->

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
