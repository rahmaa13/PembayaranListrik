@extends('layouts.adminlte')
@include('layouts.sidebar')
<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
</head>
<link rel="stylesheet" href="{{asset('css/morris.css')}}">
<style type="text/css">
.center {
  text-align: center;
}
</style>
<body>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard<i class="ion ion-ios-arrow-right"></i>
        @if(Auth::user() && Auth::user()->akses == 'Admin')
        <i><a href="{{url('#admin')}}">Admin</a></i>
        @else
        <a href="{{url('#user')}}">User</a>
        @endif
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard <b><i>{{Auth::user()->akses}}</i></b> </li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>{{count(\App\Tarif::all())}}</h3>

              <p>Semua Tarif </p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-book"></i>
            </div>
            @if(Auth::user() && Auth::user()->akses == 'Admin')
            <a href="{{url('plo')}}" class="small-box-footer">Informasi Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            @else
            <a href="#plo" class="small-box-footer">Informasi Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
            @endif
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
             <h3>{{ number_format($presentase, 2) }}<sup style="font-size: 25px;">%</sup> </h3>
             <p>Persentase Penmbayaran</p>
           </div>
           <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#pers" class="small-box-footer">Informasi Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{count(\App\Pelanggan::all())}}</h3>

            <p>Pelanggan PLO</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-people"></i>
          </div>
          @if(Auth::user() && Auth::user()->akses == 'Admin')
          <a href="{{url('pelanggan')}}" class="small-box-footer">Informasi Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          @else
          <a href="#plo" class="small-box-footer">Informasi Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
          @endif
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$selesaitagihan}}</h3>
            <p>Pembayaran Terselesaikan</p>
          </div>
          <div class="icon">
            <i class="ion ion-archive"></i>
          </div>
          <a href="#" class="small-box-footer">Informasi Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- data ppbj baru dan user baru -->
    <div class="row">

      <div class="col-md-8">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Data Pelanggan Baru</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-hover" role="grid" aria-describedby="example1_info" data>
                <thead>
                  <tr>
                    <th style="text-align: center;">No. </th>
                                            <th style="text-align: center;">Nama Pelanggan</th>
    <th style="text-align: center;">No Meter</th>
    <th style="text-align: center;">Alamat</th>
    <th style="text-align: center;">KodeTarif</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($getpelanggan as $key)
  <tr>
    <td style="text-align: center;">{{$key->id}}</td>
    <td style="text-align: center;">{{$key->nama}}</td>
    <td style="text-align: center;">{{$key->nometer}}</td>
    <td style="text-align: center;">{{$key->alamat}}</td>
    <td style="text-align: center;">{{$key->kodetarif}}</td>
                  </tr>
                  @endforeach
                </tbody>
                {!!$getpelanggan->render()!!}
              </table>
            </div>
            <!-- /.table-responsive -->
          </div>
          <!-- /.box-body -->
          <!-- /.box-footer -->
        </div>
      </div>
      <div class="col-md-4">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Latest Users</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul class="products-list product-list-in-box">
              <li class="item">
                <div class="product-img">
                  <img class="img-circle" src="/uploads/avatar/defaults.jpg" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">User
                    <span class="label label-warning pull-right">17-03-2018</span></a>
                    <span class="product-description">
                      User gan
                    </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img class="img-circle" src="/uploads/avatar/defaults.jpg" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">-
                      <span class="label label-success pull-right">18-03-2018</span></a>
                      <span class="product-description">
                        Kasubagg
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Users</a>
              </div>
              <!-- /.box-footer -->
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
          </section>
        </div>
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