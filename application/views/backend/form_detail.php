<?php include 'componen/header.php'?>


<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Detail Instansi</h1>
	<br>

	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Detail Data Darah Instansi
			</h6>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Instansi/UPTD Sultra</th>
							<th>Tempat</th>
							<th>Update Time</th>
						</tr>
					</thead>
					<tbody>
						
						<?php 
						$no = 1;
						foreach ($hasil as $data) {
							?>

							<tr>
								<td><?= $no++; ?></td>
								<td>
									<?= $data->instansi; ?>
									<br>
									<?= $data->nama_golongan; ?> : <?= $data->total_stok_darah; ?> 
									<br>
								</td>
								<td><?= $data->tempat_kegiatan; ?></td>
								<td><?= $data->update_time; ?></td>
							</tr>

						<?php } ?>

						<!-- total -->
						<tfoot>
							<tr>
								<td colspan="2">Total :</td>
								<td></td>
								<td colspan="3"></td>
							</tr>

						</tfoot>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" action="<?= base_url('Ketersediaan/aksiInsertKet')?>">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Instansi/UPTD Sultra</label>
						<select class="form-control" name="instansi" required>
							<option value="">- Pilih -</option>
							<?php 
							foreach ($jadwal as $data) {
								?>
								<option value="<?= $data->id?>"><?= $data->instansi?></option>
							<?php } ?>
						</select>
					</div> 
					<div class="form-group">
						<label for="">Golongan Darah</label>
						<select class="form-control" name="golongan_darah_id" required>
							<option value="">- Pilih -</option>
							<?php 
							foreach ($golongan as $data) {
								?>
								<option value="<?= $data->id?>"><?= $data->nama_golongan?></option>
							<?php } ?>
						</select>
					</div> 
					<div class="form-group">
						<label for="">Stok Darah</label>
						<input type="number" class="form-control"  name="stok_darah" required>
					</div>
					<div class="form-group">
						<label for="">Update Time</label>
						<input type="datetime-local" class="form-control"  name="update_time" required>
					</div> 
					<div class="form-group">
						<label for="">Update By</label>
						<input type="text" class="form-control"  name="update_by" required>
					</div> 
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Tutup</button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php include 'componen/footer.php'?>