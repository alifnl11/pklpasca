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
            <li><a href="pages/forms/general.html"><i class="far fa-circle"></i>General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="far fa-circle"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="far fa-circle"></i> Editors</a></li>
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
        @foreach($errors-> all as $error)
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
    <form method="post" action="{{ url('arsip') }}" >
    {{csrf_field()}}
    <fieldset>
        <fieldset class="form-group">
        <label>Jenis Surat</label>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="jenis_surat" id="optionsRadios1" value="Surat Pelayanan SPs" checked="">
            Surat Pelayanan SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="jenis_surat" id="optionsRadios2" value="Surat Keperluan Lain">
            Surat Keperluan Lain
            </label>
        </div>
        </fieldset>

        <div class="form-group">
        <label for="exampleSelect2">Surat Pelayanan SPs</label>
        <select id="tags-select" name="surat_pelayanan_sps">
            <option value="1">Kartu Tanda Mahasiswa</option>
            <option value="2">Form Rencana Studi</option>
            <option value="3">Lembar Hasil Studi</option>
            <option value="4">SK Pembimbingan</option> 
            <option value="5">Surat Keterangan Aktif</option>
            <option value="6">Surat Izin Prapenelitian</option>
            <option value="7">Surat Izin Penelitian</option>
            <option value="8">Pengesahan Proposal</option>
            <option value="9">Legalisasi Proposal</option>
            <option value="10">Surat Izin Cuti Akademik</option>
            <option value="11">Surat Aktif Kembali dari Cuti Akademik</option>
            <option value="12">Surat Undangan Ujian Kualifikasi (Prelim Lisan)</option>
            <option value="13">Surat Keterangan Kemajuan Studi</option>
            <option value="14">Sasaran Kerja Pegawai (SKP)</option>
            <option value="15">Surat pengantar ke Mandiri</option>
            <option value="10">Undangan Sidang Komisi</option>
            <option value="10">Undangan Seminar</option>
            <option value="10">Undangan Ujian Tesis</option>
            <option value="10">Undangan Ujian Tertutup</option>
            <option value="10">Undangan Sidang Promosi S3</option>
            <option value="10">Pengesahan Tesis</option>
            <option value="10">Pengesahan Disertasi</option>
            <option value="10">Surat Keterangan Lulus</option>
            <option value="10">Translate Ijazah/Transkrip</option>
            <option value="10">Legalisasi Ijazah/Transkrip</option>
            <option value="10">Surat Penyerahan Kembali ke Instansi</option>
            <option value="10">Sertifikat IP4</option>
            <option value="10">Surat Permohonan Pembuatan Visa</option>
            <option value="10">Surat Rekomendasi </option>
            <option value="10">Surat Pengunduran Diri</option>
            <option value="10">Surat Permohonan Pindah Program Studi</option>
            <option value="10">Perbaikan Transkrip </option>
            <option value="10">Perbaikan Ijazah Indonesia/Inggris</option>
            <option value="10">Salinan Ijazah/Transkrip Indonesia</option>
            <option value="10">Salinan Translate Ijazah/Transkrip Inggris</option>
            <option value="10">Surat Keterangan Tidak Menerima Beasiswa</option>
            <option value="10">Surat Rekomendasi Bantuan Beasiswa</option>
            <option value="10">Surat Keterangan Lulus Proposal</option>
            <option value="10">Surat Permohonan Penarikan SPP</option>
            <option value="10">Permohonan Pembuatan Transkrip</option>
            <option value="10">Surat Izin Tidak Mengikuti Perkuliahan</option>
            <option value="10">Surat Keterangan Pernah Kuliah</option>
            <option value="10">Surat Ijin /Keterangan Sandwich</option>
            <option value="10">Surat Pernyataan Beasiswa</option>
            <option value="10">Surat Perpanjangan Masa Studi</option>
            <option value="10">Surat Rekomendasi Kandidat Doktor</option>
            <option value="10">Surat Perpanjangan Tugas Belajar</option>
            <option value="10">Surat Rekomendasi Bantuan Biaya Penelitian</option>
            <option value="10">Surat Rekomendasi Perpanjangan Beasiswa</option>
            <option value="10">Surat Rekomendasi Hibah Doktor</option>
            <option value="10">Surat Ketrangan Tarif Nol Rupiah</option>
            <option value="10">Surat Keterangan/Pernyataan</option>
            <option value="10">Predikat Kelulusan</option>
            <option value="10">Surat Keterangan Belum dapat SKL</option>
            <option value="10">Surat Pernyataan Penyelesaian Studi</option>
            <option value="10">Surat Pengantar Ke Laboratorium/Sempel</option>
            <option value="10">Berita Acara Hasil Sidkom</option>
            <option value="10">Berita Acara Ujian Tesis</option>
            <option value="10">Berita Acara Ujian Prelim</option>
            <option value="10">Berita Acara Ujian Tertutup</option>
            <option value="10">Berita Acara Sidang Promosi</option>
            <option value="10">Tanda Terima Penilaian Proposal</option>
            <option value="10">Tanda Terima Penilaian Publikasi /Jurnal</option>
            <option value="10">Surat Rekomendasi tidak Menerima Bantuan Biaya Penelitian</option>
            <option value="10">Legalisir Tesis/Disertasi</option>
            <option value="10">Surat Pengantar Izin Membimbing</option>
            <option value="10">Linieritas Program Studi</option>
        </select>
        </div>

        <div class="form-group">
        <label class="col-form-label" for="inputDefault">Surat Pelayanan Lainnya</label>
        <input type="text" name="surat_pelayanan_lainnya" class="form-control" placeholder="" id="inputDefault">
        </div>

        <div class="form-group">
        <label class="col-form-label" for="inputDefault">Rincian Jenis Surat</label>
        <input type="text" name="rincian_jenis_surat" class="form-control" placeholder="" id="inputDefault">
        </div>

        <label>Tujuan Surat Pelayanan SPs</label>
        <div class="form-group">
        <label class="col-form-label" for="inputDefault">ID_Pelayanan Loket</label>
        <input type="text" name="id_loket" class="form-control" placeholder="" id="inputDefault">
        </div>

        <fieldset class="form-group">
        <label>Tujuan Surat Keluar</label>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="tujuan_surat_keluar" id="optionsRadios1" value="Mahasiswa" checked="">
            Mahasiswa
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="tujuan_surat_keluar" id="optionsRadios2" value="Pribadi/Personal">
            Pribadi/Personal
            </label>
        </div>
        </fieldset>

        <fieldset class="form-group">
            <label>Tujuan Surat</label>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" name="tujuan_surat" id="optionsRadios1" value="Mahasiswa" checked="">
                Mahasiswa
                </label>
                </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="tujuan_surat" id="optionsRadios2" value="Direktorat/Kantor/Unit">
                Direktorat/Kantor/Unit
                </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" name="tujuan_surat" id="optionsRadios3" value="Pribadi/Personal">
                Pribadi/Personal
                </label>
            </div>
        </fieldset>

        <div class="form-group">
        <label>Data Mahasiswa</label>
        <label class="col-form-label" for="inputDefault">NRP</label>
        <input type="text" name="nrp" class="form-control" placeholder="" id="inputDefault">
        </div>

        <div class="form-group">
        <label for="exampleSelect2">Rincian Tujuan Surat Keluar</label>
        <select id="tags-select" name="rincian_tujuan_surat">
            <option value="1">Mahasiswa yang Bersangkutan</option>
            <option value="2">Komisi Penguji</option>
            <option value="3">Komisi Pembimbing</option>
            <option value="4">Dekan Sekolah Pascasarjana IPB</option>
            <option value="5">Pimpinan Sidang Promosi Terbuka S3</option>
            <option value="6">Kepala Biro Umum, Sarana dan Prasarana</option>
            <option value="7">Direktur Program Internasional</option>
            <option value="8">Ketua Peogram Studi Multidisiplin</option>
            <option value="9">Direktur Administrasi Pendidikan IPB</option>
            <option value="10">Direktur Keuangan dan Akuntansi IPB</option>
            <option value="11">Direktur Sumber Daya Manusia IPB</option>
            <option value="12">Direktur Sistem Informasi dan Transformasi Digital IPB</option>
            <option value="13">Ketua Program Studi MB IPB</option>
            <option value="14">Dekan Sekolah Bisnis</option>
            <option value="15">Rektor</option>
            <option value="16">Wakil Rektor Bidang Pendidikan dan Kemahasiswaan</option>
            <option value="17">Wakil Rektor Bidang Sumberdaya, Perencanaan dan Keuangan</option>
            <option value="18">Wakil Rektor Bidang Kerjasama dan Sistem Informasi</option>
            <option value="19">Wakil Rektor Bidang Inovasi, Bisnis dan Kewirausahaan</option>
            <option value="20">Sekretaris Institut</option>
            <option value="21">Kantor Manajemen Mutu dan Audit Internal</option>
            <option value="22">Biro Komunikasi</option>
            <option value="23">Biro Legislasi dan Pelayanan Hukum</option>
            <option value="24">Direktorat Pengembangan Program dan Teknologi Pendidikan</option>
            <option value="25">Direktorat Perencanaan, Pemonitoran dan Evaluasi</option>
            <option value="26">Direktorat Kerjasama dan Hubungan Alumni</option>
            <option value="27">Direktorat Program Internasional</option>
            <option value="28">Direktorat Bisnis dan Manajemen Aset Komersial</option>
            <option value="29">Direktorat Inovasi dan Kewirausahaan</option>
            <option value="30">Program Pendidikan Kompetensi Umum</option>
            <option value="31">Lembaga Pengembangan Institut</option>
            <option value="32">Lembaga Penelitian dan Pengabdian Kepada Masyarakat</option>
            <option value="33">Unit Pelatihan Bahasa</option>
            <option value="34">Unit Olahraga dan Seni</option>
            <option value="35">Unit Transportasi Kampus</option>
            <option value="36">Unit Keamanan Kampus (UKK)</option>
            <option value="37">Unit Kesehatan</option>
            <option value="38">Unit Pengadaan</option>
            <option value="39">Unit Arsip</option>
            <option value="40">Tujuan Surat Keluar lain</option>
        </select>
        </div>

        <div class="form-group">
        <label for="exampleSelect2">Kode Surat</label>
        <select id="tags-select" name="kode_surat">
            <option value="1">AK - Data dan Informasi Akademik</option>
            <option value="2">DL - Pendidikan dan Pelatihan</option>
            <option value="3">DT - Tata Pamong Perguruan Tinggi</option>
            <option value="4">HK - Hukum</option>
            <option value="5">KM - Kemahasiswaan</option>
            <option value="6">KP - Kepegawaian</option>
            <option value="7">KS - Kerjasama</option>
            <option value="8">KU - Keuangan</option>
            <option value="9">LK - Perlengkapan</option>
            <option value="10">OT - Organisasi dan Ketatalaksanaan</option>
            <option value="11">PG - Pengkajian dan Pengembangan</option>
            <option value="12">PM - Pengabdian Kepada Masyarakat</option>
            <option value="13">PN - Penelitian</option>
            <option value="14">PP - Pendidikan dan Pengajaran</option>
            <option value="15">RT - Kerumahtanggaan</option>
            <option value="16">TI - Informasi/SIM/TIK</option>
            <option value="17">TU - Ketatausahaan</option>
            <option value="18">WS - Pengawasan</option>
            <option value="19">PR - Perencanaan</option>
        </select>
        </div>

        <div class="form-group">
        <label class="col-form-label" for="inputDefault">Tujuan Surat Keluar Lainnya</label>
        <input type="text" name="tujuan_surat_keluar_lainnya" class="form-control" placeholder="" id="inputDefault">
        </div>

        <fieldset class="form-group">
        <label>Pengirim Surat Keluar</label>
        <div class="form-check">
            <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="optionsRadios1" value="Dekan SPs" checked="">
            Dekan SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="optionsRadios2" value="wAKIL Dekan SPs">
            Wakil Dekan SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="optionsRadios2" value="Sekretaris Program Doktor (S3)">
            Sekretaris Program Doktor (S3)
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="optionsRadios2" value="Sekretaris Program Magister (S2)">
            Sekretaris Program Magister (S2)
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="optionsRadios2" value="Kepala Tata Usaha SPs">
            Kepala Tata Usaha SPs
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="optionsRadios2" value="Pimpinan Sidang Promosi Terbuka S3">
            Pimpinan Sidang Promosi Terbuka S3
            </label>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="pengirim_Surat_Keluar" id="optionsRadios2" value="Pengirim Lainnya">
            Pengirim Lainnya
            </label>
        </div>
        </fieldset>

        <div class="form-group">
        <label class="col-form-label" for="inputDefault">Keterangan Pengirim Surat Keluar</label>
        <input type="text" name="keterangan_pengirim_surat_keluar" class="form-control" placeholder="" id="inputDefault">
        </div>

        <div class="form-group">
        <label for="exampleInputFile">Unggah Berkas Surat</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
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