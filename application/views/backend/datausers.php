<?php include 'componen/header.php'?>



<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Data User</h1>
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
			<h6 class="m-0 font-weight-bold text-primary">Data User
			</h6>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Email</th>
							<th>Nama Lengkap</th>
							<th>No.Telephone/Hp</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$no = 1;
						foreach ($tampil as $key => $data) {
							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data->email; ?></td>
								<td><?= $data->nama_lengkap; ?></td>
								<td><?= $data->no_hp; ?></td>
								<td>
									<a href="<?php echo base_url('Data_user/tampil_data/'). $data->id ?>" class="btn btn-success"><i class="fab fa-whatsapp"></i> Send</a>
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
<div class="modal fade" id="tampil_data_wa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" action="<?= base_url('Data_user/AksiInsertNotif')?>">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Kirim Notifikasi WA</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">No.Hp/WA</label>
						<input type="hidden" name="id" id="id">
						<input type="text" class="form-control" name="hp_wa" id="hp_wa" required>
					</div> 
					<div class="form-group">
						<label for="">Isi Pesan</label>
						<textarea class="form-control" name="pesan_wa" id="pesan_wa" required></textarea>
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