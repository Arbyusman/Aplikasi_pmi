<?php 
include 'componen/header.php'
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Kegiatan</h1>
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
			<h6 class="m-0 font-weight-bold text-primary">Form Jadwal Kegiatan
				<a href="<?= base_url('jadwal')?>" class="btn btn-primary" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
			</h6>
		</div>
		<div class="card-body">
			<form method="POST" action="<?= base_url('jadwal/aksiUpdateKeg')?>">
				<div class="form-group">
					<div class="form-group">
						<label for="">Waktu</label>
						<input type="hidden" name="id" value="<?= $jadwal->id; ?>">
						<input type="datetime-local" class="form-control"  name="waktu" value="<?= $jadwal->waktu; ?>">
					</div> 
					<div class="form-group">
						<label for="">Instansi</label>
						<input type="text" class="form-control"  name="instansi" value="<?= $jadwal->instansi; ?>">
					</div>
					<div class="form-group">
						<label for="">Tempat Kegiatan</label>
						<input type="text" class="form-control"  name="tempat_kegiatan" value="<?= $jadwal->tempat_kegiatan; ?>">
					</div>
					<div class="form-group">
						<label for="">Keterangan</label>
						<textarea class="form-control" name="ket"><?= $jadwal->ket; ?></textarea>
					</div> 
					<div class="form-group">
						<label for="">Update By</label>
						<input type="text" class="form-control"  name="update_by" value="<?= $jadwal->update_by; ?>">
					</div>
					<div class="form-group">
						<label for="">Update at</label>
						<input type="time" class="form-control"  name="update_at" value="<?= $jadwal->update_at; ?>">
					</div> 
					<button type="submit" class="btn btn-primary mt-4"><i class="fas fa-save"></i> Update</button>
				</div>
			</form>
		</div>
	</div>
</div>



<?php include 'componen/footer.php'?>