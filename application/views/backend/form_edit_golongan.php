<?php 
include 'componen/header.php'
?>

<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Golongan</h1>
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
			<h6 class="m-0 font-weight-bold text-primary">Form Edit Golongan
				<a href="<?= base_url('golongan_darah_id')?>" class="btn btn-primary" style="float: right;"><i class="fas fa-arrow-left"></i> Kembali</a>
			</h6>
		</div>
		<div class="card-body">
			<form method="POST" action="<?= base_url('golongan_darah_id/aksiUpdateGolongan')?>">
				<div class="form-group">
					<div class="form-group">
						<label for="">Golongan Darah</label>
						<input type="hidden" name="id" value="<?= $tampil->id; ?>">
						<input type="text" class="form-control"  name="gol_darah" value="<?= $tampil->nama_golongan; ?>">
					</div> 
					<div class="form-group">
						<label for="">WB</label>
						<input type="text" class="form-control"  name="wb" id="wb" value="<?= $tampil->wb; ?>">
					</div>
					<div class="form-group">
						<label for="">PRC</label>
						<input type="text" class="form-control"  name="prc" id="prc" value="<?= $tampil->prc; ?>">
					</div>
					<div class="form-group">
						<label for="">TC</label>
						<input type="text" class="form-control"  name="tc" id="tc" value="<?= $tampil->tc; ?>">
					</div>
					<div class="form-group">
						<label for="">stok_darah</label>
						<input type="text" class="form-control"  name="stok_darah" id="stok_darah" value="<?= $tampil->stok_darah; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="">Belum Serologi</label>
						<input type="text" class="form-control" name="belum_serologi" value="<?= $tampil->belum_serologi; ?>">
					</div> 
					<button type="submit" class="btn btn-primary mt-4"><i class="fas fa-save"></i> Update</button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php include 'componen/footer.php'?>