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
                                    <h2 style="font-size: 25px" class="box-title">Data Pembayaran</h2></center>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <a href="{{url('pembayaran/add')}}" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp;Tambah Pembayaran</a>
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">No. </th>
                                                    <th style="text-align: center;">Nama Pelanggan</th>
                                                    <th style="text-align: center;">Tanggal</th>
                                                    <th style="text-align: center;">Bulan Bayar</th>
                                                    <th style="text-align: center;">Biaya Admin</th>
                                                    <th colspan="2" style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pembayaran as $key)
                                                <?php
                                                $getnama = \App\Pelanggan::whereId($key->id_pelanggan)->value('nama');
                                                ?>
                                                <tr>
                                                    <td style="text-align: center;">{{$key->id}}</td>
                                                    <td style="text-align: center;">{{ $getnama }}</td>
                                                    <td style="text-align: center;">{{ $key->tanggal }}</td>
                                                    <td style="text-align: center;">{{ $key->bulanbayar }}</td>
                                                    <td style="text-align: center;">{{ $key->biayaadmin }}</td>
                                                    <td style="text-align: center;">
                                                        <a href="{{url('pembayaran/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
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