<?php include 'componen/header.php'?>



<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Ketersediaan</h1>
	<br>

	<!-- Alert -->
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success" role="alert">
					Data  <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Ketersediaan
				<!-- Button trigger modal -->
				<button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					<i class="fas fa-plus"></i>	Tambah Data
				</button>
			</h6>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Instansi/UPTD Sultra</th>
							<th>Golongan Darah</th>
							<th>Stok</th>
							<th>Update Time</th>
							<th>Update By</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$totalstok_darah = 0;
						$no = 1;
						foreach ($tampil as $key => $data) {

							$golonganDarah = $data->golongan_darah_id;
							$totalstok_darah += $data->stok_darah;

							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><a href=""><?= $data->instansi; ?></a></td>
								<td><?= $data->nama_golongan; ?></td>
								<td><?= $data->stok_darah; ?></td>
								<td><?= $data->update_time; ?></td>
								<td><?= $data->update_by; ?></td>
								<td>
									<a href="<?php echo base_url('ketersediaan/form_edit_ket/'). $data->id ?>" class="btn btn-warning">Edit</a>
									<a href="<?php echo base_url('ketersediaan/aksiHapusKet/'). $data->id ?>"  Onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data ini!')" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						<?php } ?>
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
			<form  action="<?= base_url('Ketersediaan/aksiInsertKet')?>" method="POST">
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
						<select class="form-control" name="golongan_darah_id" id="golonganDarah" required>
							<option value="">- Pilih -</option>
							<?php 
							foreach ($golongan as $data) {
								?>
								<option value="<?= $data->id?>"><?= $data->nama_golongan?></option>
							<?php } ?>
						</select>
					</div> 
					<div class="form-group">
						<label for="">Stok Darah Darah</label>
						<input type="number" class="form-control" name="stok_darah" id="stok_darah" required>
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



<script>
	$(document).ready(function() {
		$('#golonganDarah').on('change', function() {
			var selectedUserId = $(this).val();

			$.ajax({
				url: '<?= base_url('Ketersediaan/getstok_darahDarah'); ?>',
				method: 'post',
				data: { id: selectedUserId },
				dataType: 'json',
				success: function(response) {
					console.log(response);

                // Check if the 'stok_darah' property exists in the response
                // if ('stok_darah' in response) {
                // 	$('#stok_darah').val(response.stok_darah);
                // } else {
                // 	console.error('Invalid response format: Missing "stok_darah" property');
                // }
            },
            error: function(xhr, status, error) {
            	console.error(xhr.responseText);
            }
        });
		});
	});

</script>




<?php include 'componen/footer.php'?>