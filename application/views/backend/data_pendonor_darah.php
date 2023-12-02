<?php include 'componen/header.php'?>



<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Data Pendonor</h1>
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
			<h6 class="m-0 font-weight-bold text-primary">Data Pendonor

				<!-- Button trigger modal -->
				<!-- <button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					<i class="fas fa-plus"></i>	Tambah Data
				</button> -->
			</h6>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nomor Kartu Pendonor</th>
							<th>Nomor Ktp</th>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>Pekerjaan</th>
							<th>Tempat Lahir</th>
							<th>Alamat Kantor</th>
							<th>Nomor Telphone Kantor</th>
							<th>Golongan Darah</th>
							<th>Penghargaan Yang Di Terima</th>
							<th>Bersedia Donor Bulan Puasa</th>
							<th>Bersedia Donor Diluar Rutin</th>
							<th>Donor Terakhir</th>
							<th>Donor Keberapa</th>
							<th>Aksi</th>

						</tr>
					</thead>
					<tbody>

						<?php

						$no = 1;
						foreach ($data_pendonor as $data) {

							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data->no_kartudonor; ?></td>
								<td><?= $data->no_ktp; ?></td>
								<td><?= $data->nama_lengkap; ?></td>
								<td><?= $data->jenis_kelamin; ?></td>
								<td><?= $data->alamat_rumah; ?></td>
								<td><?= $data->pekerjaan; ?></td>
								<td><?= $data->tempat_lahir; ?></td>
								<td><?= $data->alamat_kantor; ?></td>
								<td><?= $data->no_telepon_kantor; ?></td>
								<td><?= $data->golongan_darah; ?></td>
								<td><?= $data->penghargaan_diterima; ?></td>
								<td><?= $data->bersedia_donor_puasa; ?></td>
								<td><?= $data->bersedia_donor_diluar_rutin; ?></td>
								<td><?= $data->donor_terakhir; ?></td>
								<td><?= $data->donor_keberapa; ?></td>
								<td class="text-dark text-nowrap">
									<a href="" class="btn btn-warning">Edit</a> 
									<a href="" class="btn btn-danger">Hapus</a>
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
			<form method="POST" action="<?= base_url('Ketersediaan/aksiInsertKet')?>">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Golongan Darah</label>
						<input type="text" class="form-control"  name="golongan_darah" required>
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