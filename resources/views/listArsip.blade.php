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
  <!-- Style Untuk Modal popup -->
  <style>
    .modal-body{
      height:500px;
      overflow:hidden;
    }
    .modal-body:hover{overflow-y:auto;}

    .modal-title {
      margin: 0 auto;
    }

    .popupheader{
      height:50px;
      width:600px;
      background-color:#3C8DBC;
      color:white;
      
    }

    .fade{
      opacity:1;
      -webkit-transaction: opacity 1s linear;
      transaction: opacity 1s linear;
    }
  </style>

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
            <li><a href="adminloket"><i class="far fa-circle"></i>&nbsp Admin Loket</a></li>
            <li><a href="adminttd"><i class="far fa-circle"></i>&nbsp Admin TTD Pimpinan</a></li>
            <li><a href="adminpermohonansurat"><i class="far fa-circle"></i>&nbsp Admin Penomoran Surat</a></li>
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
            <li><a href="list"><i class="far fa-circle"></i>Daftar Arsip </a></li>
          </ul>

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
        List Arsip Pengajuan Surat 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      
    <section class="content">
    
        <div class="box border-top-solid">
            <!-- /.box-header -->
            <div class="box-body table-responsive">
            <div class="col-md-6">
              <form action="/search" method="get">
                <div class="input-group">
                  <input type="search" class="form-control" name="search" autocomplete="off" autofocus>
                  <span class="input-group-prepend">
                    <button type="submit" class="btn btn-primary">Search</button>
                  </span>
                </div>
              </form>
            </div>
                  
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
            
            <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped  dataTable no-footer" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                <th style="width: 65px;">ID Pelayanan Loket</th>
                <th style="width: 100px;">Jenis Surat</th>
                <th style="width: 154px;">Jenis Surat Pelayanan SPs</th>
                <th style="width: 100px;">Surat Pelayanan Lainnya</th>
                <th style="width: 65px;">Rincian Jenis Surat</th>
                <th style="width: 65px;">Tujuan Surat Keluar</th>
                <th style="width: 65px;">Tujuan Surat</th>
                <th style="width: 65px;">NRP</th>
                <th style="width: 65px;">Rincian Tujuan Surat Keluar</th>
                <th style="width: 65px;">Kode Surat</th>
                <th style="width: 65px;">Tujuan Surat Keluar Lainnya</th>
                <th style="width: 65px;">Pengirim Surat Keluar</th>
                <th style="width: 65px;">Keterangan Pengirim Surat Keluar</th>
                <th style="width: 65px;">Nomor Surat</th>
                <th style="width: 65px;">Berkas</th>
                </thead>
                <tbody>
                @foreach($list as $arsip)       
                    <tr role="row" class="odd">
                    <td>{{ $arsip->id_loket}}</td>
                    <td style="text-align:center;">{{  $arsip->jenis_surat}}</td>
                    <td>{{ $arsip->surat_pelayanan_sps}}</td>
                    <td>{{ $arsip->surat_pelayanan_lainnya}}</td>
                    <td>{{ $arsip->rincian_jenis_surat}}</td>
                    <td>{{ $arsip->tujuan_surat_keluar}}</td>
                    <td>{{ $arsip->tujuan_surat}}</td>
                    <td>{{ $arsip->nrp}}</td>
                    <td>{{ $arsip->rincian_tujuan_surat}}</td>
                    <td>{{ $arsip->kode_surat}}</td>
                    <td>{{ $arsip->tujuan_surat_keluar_lainnya}}</td>
                    <td>{{ $arsip->pengirim_Surat_Keluar}}</td>
                    <td>{{ $arsip->keterangan_pengirim_surat_keluar}}</td>
                    <td>{{ $arsip->nomor_surat }}</td>
                    <td>{{ $arsip->file}}</td>
                    
                    </tr>
                    @endforeach         
                            
                 
                </tbody>
            
            </table></div></div>
              <div class="row">
                <!--<div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div> -->
                <div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate" style=" float: right; padding-right: 20px; position: relative;"><ul class="pagination">
                <span>{{ $list->links() }}</span>
              </ul>
            </div></div></div></div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        </section>  

        <!-- Modal -->
        <div id="confirm-delete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Delete Dialog</h4>
            </div>
            <div class="modal-body">
                <p>As you sure you want to delete.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-danger btn-ok">Yes</a>
            </div>
            </div>

        </div>
        </div>


        <!-- DataTables -->
        <script src="http://site.codeglamour.com/ci_adminlte/public/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="http://site.codeglamour.com/ci_adminlte/public/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
        $(function () {
            $("#example1").DataTable();
        });
        </script> 
        <script type="text/javascript">
            $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            });
        </script>
        
        <script>
        $("#view_users").addClass('active');
        </script>                                        
        <!-- page end-->
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