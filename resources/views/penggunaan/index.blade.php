<!DOCTYPE html>
<html>

<head>
  @extends('layouts.adminlte')
</head>
<style type="text/css">
.center {
  text-align: center;
}
</style>
<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">
<body class="hold-transition skin-blue sidebar-mini">
  @include('layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-fluid spark-screen">
      <div class="row">
        <br>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <center>
                <center>
                  <h2 style="font-size: 25px" class="box-title">Data Penggunaan</h2></center>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <button style="margin-bottom: 10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-addPenggunaan"><i class="fa fa-plus-square"></i>&nbsp;Tambah Penggunaan</button>
                  <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                      <thead>
                        <tr>
                          <th style="text-align: center;">No. </th>
                          <th style="text-align: center;">Nama Pelanggan</th>
                          <th style="text-align: center;">Bulan</th>
                          <th style="text-align: center;">Tahun</th>
                          <th style="text-align: center;">Meter Awal</th>
                          <th style="text-align: center;">Meter Akhir</th>
                          <th colspan="2" style="text-align: center;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($penggunaan as $key)
                        <tr>
                          <?php
                          $getname = \App\Pelanggan::whereId($key->id_pelanggan)->value('nama');
                          ?>
                          <td>{{$key->id}}</td>
                          <td style="text-align: center;">{{$getname}}</td>
                          <td style="text-align: center;">{{$key->bulan}}</td>
                          <td style="text-align: center;">{{$key->tahun}}</td>
                          <td style="text-align: center;">{{$key->meterawal}}</td>
                          <td style="text-align: center;">{{$key->meterakhir}}</td>
                          <td style="text-align: center;">
                            <a href="{{url('penggunaan/edit/'.$key->id)}}"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                            <a href="{{url('penggunaan/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div></div></div></div>
            @include('layouts.footer')
            <script type="text/javascript" src="{{asset('js/datatable/jquery.dataTables.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/datatable/dataTables.bootstrap.min.js')}}"></script>
            <script src="{{asset('js/sweetalert.min.js')}}"></script>
            <script type="text/javascript">
              $(document).ready(function() {
                $('#example').DataTable();
              });
            </script>
        </body>
  </html>