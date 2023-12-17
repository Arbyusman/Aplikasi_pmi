<?php 
include 'componen/header.php'
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Pendonor</h1>
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
			<h6 class="m-0 font-weight-bold text-primary">Form Edit Data Pendonor
				<a href="<?= base_url('ketersediaan/datapendonor')?>" class="btn btn-primary" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
			</h6>
		</div>
		<div class="card-body">
			<form method="POST" action="<?= base_url('Ketersediaan/aksiUpdateDon')?>">
				<div class="form-group">
					<label>No.Kartu Donor</label>
					<input type="hidden" name="id" value="<?= $pendonor->id_pendonor;?>">
					<input type="text" class="form-control" name="no_kartudonor"  value="<?= $pendonor->no_kartudonor;?>">
					<label>Alamat kantor</label>
					<input type="text" class="form-control" name="alamat_kantor"  value="<?= $pendonor->alamat_kantor;?>">
					<label>No.Telephone Kantor</label>
					<input type="text" class="form-control"  name="no_telepon_kantor" value="<?= $pendonor->no_telepon_kantor;?>">
					<label>Golongan Darah</label>
					<input type="text" class="form-control"  name="golongan_darah" value="<?= $pendonor->golongan_darah;?>">
					<label>Penghargaan Yang di terima</label>
					<input type="text" class="form-control"  name="penghargaan_diterima" value="<?= $pendonor->penghargaan_diterima;?>">
					<label>Bersedia donor bulan puasa</label>
					<select class="form-control" name="bersedia_donor_puasa">
						<option value="ya" <?= ($pendonor->bersedia_donor_puasa == 'ya') ? 'selected' : ''; ?>>Ya</option>
						<option value="tidak" <?= ($pendonor->bersedia_donor_puasa == 'tidak') ? 'selected' : ''; ?>>Tidak</option>
					</select>
					<label>Bersedia donor diluar rutin</label>
					<select class="form-control" name="bersedia_donor_diluar_rutin">
						<option value="ya" <?= ($pendonor->bersedia_donor_diluar_rutin == 'ya') ? 'selected' : ''; ?>>Ya</option>
						<option value="tidak" <?= ($pendonor->bersedia_donor_diluar_rutin == 'tidak') ? 'selected' : ''; ?>>Tidak</option>
					</select>
					<label>Donor Terakhir</label>
					<input type="datetime-local" class="form-control"  name="donor_terakhir" value="<?= $pendonor->donor_terakhir;?>">
					<label>Donor Keberapa</label>
					<input type="number" class="form-control"  name="donor_keberapa" value="<?= $pendonor->donor_keberapa;?>">
					<button type="submit" class="btn btn-primary mt-4"><i class="fas fa-save"></i> Update</button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php include 'componen/footer.php'?>