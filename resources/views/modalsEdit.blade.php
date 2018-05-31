<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- start Div Modal -->
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" style="padding-right: 15px;">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span></button>
						<center><h4 class="modal-title">Ubah Tarif</h4></center>
					</div>
					<div class="modal-body">
						<form method="POST" action="{{url('tarif/update', 'test')}}">
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
</body>
</html>