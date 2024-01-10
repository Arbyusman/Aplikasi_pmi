
<?php 
include 'componen/header.php'
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Send Wa</h1>
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
			<h6 class="m-0 font-weight-bold text-primary">Form Kirim Notifikasi Wa
				<a href="<?= base_url('data_user')?>" class="btn btn-primary" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
			</h6>
		</div>
		<div class="card-body">
			<form id="notificationForm" method="POST" action="">
				<div class="form-group">
					<div class="form-group">
						<label>No.HP</label>
						<input type="hidden" name="id" value="<?= $dat_user->id_user; ?>">
						<input type="text" class="form-control" name="hp_wa" value="<?= $dat_user->no_hp; ?>">
					</div>
					<div class="form-group">
						<label>Pesan Notifikasi</label>
						<textarea class="form-control" name="pesan_wa"></textarea>
					</div>
					<div class="form-group">
						<a href="javascript:void(0);" class="btn btn-primary" id="kirimButton">Kirim</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>




<?php include 'componen/footer.php'?>