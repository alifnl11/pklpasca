@extends('layouts.app')

@section('content')
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
                  <input type="search" class="form-control" name="search" autocomplete="off" autofocus style="margin-top: 60px;">
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
            
            <div class="row"><div class="col-sm-12"><table id="example1" style="margin-top: 15px;" class="table table-bordered table-striped  dataTable no-footer" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                <th style="width: 65px;">ID Pelayanan Loket</th>
                <th style="width: 65px;">Nomor Surat</th>
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
                <th style="width: 65px;">Berkas</th>
                <th style="width: 65px;">Aksi</th>
                </thead>
                <tbody>
                @foreach($list as $arsip)       
                    <tr role="row" class="odd">
                    <td>{{ $arsip->id_loket}}</td>
                    <td>{{ $arsip->id }}</td>
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
                    <td>{{ $arsip->file}}</td>
                    <td><a href="{{ route('arsip.edit',['id'=>$arsip->id]) }}" class="btn btn-warning btn-sm">Edit</a></td>
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
  @endsection