<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- start Div Modal -->
	<div class="modal fade in" id="modal-addTarif" style="padding-right: 15px;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span></button>
						<center><h4 class="modal-title">Tambah Tarif</h4></center>
					</div>
					<div class="modal-body">
						<form method="POST" action="{{url('tarif/save')}}">
							
							<div class="form-group">
								<label for="kodetarif">Kode Tarif</label>
								<input id="kodetarif" type="number" 
								class="form-control" name="kodetarif" required="Harap Masukan" placeholder="Kode Tarif" oninvalid="this.setCustomValidity('Tolong Isi Kode Tarif')"
								oninput="setCustomValidity('')">
							</div>
							<div class="form-group">
								<label for="daya">Daya</label>
								<input id="daya" type="number" 
								class="form-control" name="daya" required="Harap Masukan" placeholder="Daya" oninvalid="this.setCustomValidity('Tolong Isi Daya')"
								oninput="setCustomValidity('')">
							</div>
							<div class="form-group">
								<label for="tarifperkwh">Tarif per-kwh</label>
								<input id="tarifperkwh" type="text" 
								class="form-control" name="tarifperkwh" required="Harap Masukan" placeholder="Tarif per-kwh" oninvalid="this.setCustomValidity('Tolong Isi Tarif per-kwh')"
								oninput="setCustomValidity('')">
							</div>
							<input type="hidden" name="_token" value="{{csrf_token()}}">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
							<button type="submit" class="btn btn-success pull-right">Masukan Data</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- End Div Modal -->

		<!-- start Div Modal -->
		<div class="modal fade in" id="modal-addPelanggan" style="padding-right: 15px;">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span></button>
							<center><h4 class="modal-title">Tambah Pelanggan</h4></center>
						</div>
						<div class="modal-body">
							<form method="POST" action="{{url('pelanggan/save')}}">
								
								<div class="form-group">
									<label>Nometer</label>
									<input id="nometer" name="nometer" type="text" 
									class="form-control" required="Harap Masukan" placeholder="No. Meter" oninvalid="this.setCustomValidity('Harap Lengkapi Data Berikut')"
									oninput="setCustomValidity('')">
								</div>
								<div class="form-group">
									<label>Nama Pelanggan</label>
									<input id="nama" name="nama" type="text" 
									class="form-control" required="Harap Masukan" placeholder="Nama Pelanggan" oninvalid="this.setCustomValidity('Harap Lengkapi Data Berikut')"
									oninput="setCustomValidity('')">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input id="alamat" name="alamat" type="text" 
									class="form-control" required="Harap Masukan" placeholder="Alamat" oninvalid="this.setCustomValidity('Harap Lengkapi Data Berikut')"
									oninput="setCustomValidity('')">
								</div>
								<div class="form-group">
									<label>Kode Tarif</label>
									<select name="kodetarif" class="form-control">
										<option selected>Pilih satu !!!</option>
										@foreach($tarif as $key)
										<option value="{{$key->kodetarif}}">{{$key->kodetarif}} - {{$key->daya}} Watt</option>
										@endforeach
									</select>
								</div>
								<input type="hidden" name="_token" value="{{csrf_token()}}">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
								<button type="submit" class="btn btn-success pull-right">Masukan Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Div Modal -->

			<!-- start Div Modal -->
			<div class="modal fade in" id="modal-addPenggunaan" style="padding-right: 15px;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span></button>
								<center><h4 class="modal-title">Tambah Penggunaan</h4></center>
							</div>
							<div class="modal-body">
								<form method="POST" action="{{url('penggunaan/save')}}">
									
									<div class="form-group">
										<label for="name">Nama Pelanggan</label>
										<select class="form-control" name="id_pelanggan" required="Harap Masukan" oninvalid=" this.setCustomValidity('Tolong Isi Nama')">
											<option selected>Pilih Satu !!</option>
											@foreach($pelanggan as $key)
											<option value="{{$key->id}}">{{$key->nama}}</option>
											@endforeach
										</select>
									</div>

									<div class="form-group">
										<label for="bulan">Bulan</label>
										<select class="form-control" name="bulan" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Bulan')"
										oninput="setCustomValidity('')">
										<option value="Januari">Januari</option>
										<option value="Februari">Februari</option>
										<option value="Maret">Maret</option>
										<option value="April">April</option>
										<option value="Mei">Mei</option>
										<option value="Juni">Juni</option>
										<option value="Juli">Juli</option>
										<option value="Agustus">Agustus</option>
										<option value="September">September</option>
										<option value="Oktober">Oktober</option>
										<option value="November">November</option>
										<option value="Desember">Desember</option>
									</select>
								</div>

								<div class="form-group">
									<label for="tahun">Tahun</label>
									<input id="tahun" type="number" 
									class="form-control" name="tahun" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi tahun')"
									oninput="setCustomValidity('')">
								</div>

								<div class="form-group">
									<label for="meterawal">Meter Awal</label>
									<input id="meterawal" type="text" 
									class="form-control" name="meterawal" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Meter Awal')"
									oninput="setCustomValidity('')">
								</div>  

								<div class="form-group">
									<label for="meterakhir">Meter Akhir</label>
									<input id="meterakhir" type="text" 
									class="form-control" name="meterakhir" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Meter Akhir')"
									oninput="setCustomValidity('')">
								</div>

								<input type="hidden" name="_token" value="{{csrf_token()}}">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
								<button type="submit" class="btn btn-success pull-right">Masukan Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Div Modal -->

			<!-- start Div Modal -->
			<div class="modal fade in" id="modal-addTagihan" style="padding-right: 15px;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span></button>
								<center><h4 class="modal-title">Tambah Tagihan</h4></center>
							</div>
							<div class="modal-body">
								<form method="POST" action="{{url('tagihan/save')}}">
									<div class="form-group">
										<label for="nama_barang">Nama Pelanggan</label>
										<select class="form-control" name="id_pelanggan">
											<option selected value="">Pilih Satu !!!</option>
											@foreach($pelanggan as $r)
											<option value="{{$r->id}}">{{$r->nama}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<label for="bulan">Bulan</label>
										<select class="form-control" name="bulan" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Bulan Bayar')"
										oninput="setCustomValidity('')">
										<option value="Januari">Januari</option>
										<option value="Februari">Februari</option>
										<option value="Maret">Maret</option>
										<option value="April">April</option>
										<option value="Mei">Mei</option>
										<option value="Juni">Juni</option>
										<option value="Juli">Juli</option>
										<option value="Agustus">Agustus</option>
										<option value="September">September</option>
										<option value="Oktober">Oktober</option>
										<option value="November">November</option>
										<option value="Desember">Desember</option>
									</select>
								</div>
								<div class="form-group">
									<label for="tahun">Tahun</label>
									<input id="tahun" type="text" 
									class="form-control" name="tahun" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Tahun')"
									oninput="setCustomValidity('')">
								</div>
								<div class="form-group">
									<label for="tahun">Status</label>
									<select class="form-control" name="status">
										<option selected value="">Pilih Satu !!!</option>
										<option value="2">LUNAS</option>
										<option value="1">BELUM LUNAS</option>
									</select>
								</div>
								<input type="hidden" name="_token" value="{{csrf_token()}}">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kembali</button>
								<button type="submit" class="btn btn-success pull-right">Masukan Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End Div Modal -->
		</body>
		</html>