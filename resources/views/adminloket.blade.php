@extends('layouts.app')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Pengajuan Surat 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <section class="content">
        
        <div class="box border-top-solid">
            <!-- /.box-header -->
            <div class="box-body table-responsive">
            <div class="table table-hover">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row"><div class="col-sm-6">
              <div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6">
              <div id="example1_filter" class="dataTables_filter" style=" float: right; padding-right: 20px; position: relative;"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
              <button type="submit"><i class="fa fa-search"></i></button>
              </div>
              </div>
            </div>
            <div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped  dataTable no-footer" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                <th style="width: 5px; text-align:center;" aria-sort="ascending">ID</th>
                <th style="width: 100px;">NRP</th>
                <th style="width: 154px;">Estimasi</th>
                <th style="width: 100px;">Jenis Surat</th>
                <th style="width: 65px;">Status</th>
                <th style="width: 65px;">Aksi</th></tr>
                </thead>
                <tbody>
                            
                            
                    @foreach($status as $surat)
                     @if($surat->status == 'Pending')       
                      <tr role="row" class="odd">
                      <td style="text-align:center;">{{  $surat->id_proses}}</td>
                      <td>{{ $surat->nrp}}</td>
                      <td>{{ $surat->estimasi}}</td>
                      <td>{{ $surat->jenis_surat}}</td>
                      <td>{{ $surat->status}}</td>
                      <td><a href="{{ route('coba.status',['id_proses'=>$surat->id_proses,'status'=>$surat->status]) }}" class="btn btn-warning btn-sm">Selesai</a></td>
                      </tr>
                     @endif
                    @endforeach
                    
                    @foreach($status as $surat)
                       @if($surat->status == 'Bisa Diambil')       
                        <tr role="row" class="odd">
                        <td style="text-align:center;">{{  $surat->id_proses}}</td>
                        <td>{{ $surat->nrp}}</td>
                        <td>{{ $surat->estimasi}}</td>
                        <td>{{ $surat->jenis_surat}}</td>
                        <td>{{ $surat->status}}</td>
                        <td><a href="{{ route('selesai.status',['id_proses'=>$surat->id_proses,'status'=>$surat->status]) }}" class="btn btn-success btn-sm">Done</a></td>
                        </tr>
                       @endif
                      @endforeach
                </tbody>
            
            </table></div></div>
              <div class="row">
                <!--<div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 3 of 3 entries</div></div> -->
                <div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate" style=" float: right; padding-right: 20px; position: relative;"><ul class="pagination">
              
              </ul>
            </div></div></div></div>
            </div>
            <!-- /.box-body -->
        </div>
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