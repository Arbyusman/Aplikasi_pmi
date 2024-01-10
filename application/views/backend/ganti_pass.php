<?php 
include 'componen/header.php'
?>


<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Ganti Password</h1>
	<br>

	<!-- Alert -->
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success" role="alert">
					Password  <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
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
			<h6 class="m-0 font-weight-bold text-primary">Form Password
			</h6>
		</div>
		<div class="card-body">
			<form method="POST" action="<?= base_url('ganti_password/ganti_password')?>">
				<div class="form-group">
					<label>Password Baru</label>
					<input type="text" class="form-control" name="pw_baru" required>
					<?= form_error('pw_baru'); ?>
				</div>
				<div class="form-group">
					<label>Ulangi Password Baru</label>
					<input type="text" class="form-control" name="cpw_baru" required>
					<?= form_error('cpw_baru'); ?>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary mt-4"><i class="fas fa-save"></i> Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>



<?php include 'componen/footer.php'?>