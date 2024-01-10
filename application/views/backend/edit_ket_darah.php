<?php 
include 'componen/header.php'
?>

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
			<h6 class="m-0 font-weight-bold text-primary">Form Ketersediaan Darah
				<a href="<?= base_url('ketersediaan')?>" class="btn btn-primary" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
			</h6>
		</div>
		<div class="card-body">
			<form method="POST" action="<?= base_url('Ketersediaan/aksiUpdateKet')?>">
				<div class="form-group">
					<label for="">Instansi/UPTD Sultra</label>
					<select class="form-control" name="instansi" required>
						<option value="">- Pilih -</option>
						<?php 
						foreach ($jadwal as $data) {
							?>
							<option value="<?= $data->id_keg?>" <?= ($data->id_keg == $keterangan->jadwal_kegiatan) ? 'selected' : '' ?>><?= $data->instansi?></option>
						<?php } ?>
					</select>
					<label>Golongan Darah</label>
					<input type="hidden" name="id" value="<?= $keterangan->id_ket; ?>">
					<select class="form-control" name="golongan_darah" required>
						<?php 
						foreach ($golongan as $data) {
							?>
							<option value="<?= $data->id_gol?>" <?= ($data->id_gol == $keterangan->id_gol) ? 'selected' : '' ?>><?= $data->nama_golongan?></option>
						<?php } ?>
					</select>
					<!-- <label>Stok Darah</label>
						<input type="text" class="form-control" name="stok_darah"  value="<?= $keterangan->stok_darah; ?>"> -->
						<label for="">Update Time</label>
						<input type="datetime-local" class="form-control"  name="update_time" value="<?= $keterangan->update_time; ?>">
						<label for="">Update By</label>
						<input type="text" class="form-control"  name="update_by" value="<?= $keterangan->update_by; ?>">

						<button type="submit" class="btn btn-primary mt-4"><i class="fas fa-save"></i> Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<?php include 'componen/footer.php'?>