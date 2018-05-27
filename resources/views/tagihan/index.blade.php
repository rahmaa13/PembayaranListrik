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
                                    <h2 style="font-size: 25px" class="box-title">Data Tagihan</h2></center>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <a href="{{url('tagihan/add')}}" class="btn btn-primary"><i class="fa fa-plus-square"></i>&nbsp;Tambah Tagihan</a>
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                                    <thead>
                                        <tr>
                                            <th style="text-align: center";>No</th>
                                            <th style="text-align: center;">Nama Pelanggan</th>
            <th style="text-align: center;">Bulan</th>
            <th style="text-align: center;">Tahun</th>
            <th style="text-align: center;">Jumlah Meter</th>
            <th style="text-align: center;">Status</th>
            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tagihan as $r)
        <?php
        $nama = \App\Pelanggan::whereId($r->id_pelanggan)->value('nama');
        ?>
        <tr>
            <td style="text-align: center;">{{$key->id}}</td>
            <td style="text-align: center;">{{$nama}}</td>
            <td style="text-align: center;">{{$r->bulan}}</td>
            <td style="text-align: center;">{{$r->tahun}}</td>
            <td style="text-align: center;">{{$r->jumlahmeter}}</td>
            <td style="text-align: center;">@if($r->status==1)<label style="color: red;">BELUM LUNAS</label> @else <label style="color: green;">LUNAS</label> @endif</td>
            <td style="text-align: center;">
                @if($r->status==2)
                <a href="{{url('tagihan/delete/'.$r->id)}}" onclick="return confirm('are u sure to delete ?')">
                <button class="btn btn-danger" title="Delete"><span class="fa fa-trash"></span></button></a>
                @else
                <a href="{{url('pembayaran/add/'.$r->id)}}">
                    <button class="btn btn-warning" title="Pay Now"><span class="fa fa-money"></span></button>
                </a>
                @endif
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