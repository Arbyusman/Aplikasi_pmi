<?php include 'componen/header.php' ?>

<div class="container-fluid">


	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Golongan Darah</h1>
	<br>

	<!-- Alert -->
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success" role="alert">
					Data <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php elseif ($this->session->flashdata('error')) : ?>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					Data <strong>Error!</strong> <?= $this->session->flashdata('error'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>

	<?php endif; ?>

	<div class="icon-box table-responsive">
		<div class="pr-10 mb-4">
			<h2 style="color: black;" align="center">Form Edit Ucapan</h2>
		</div>

		<div class="card-header py-3">

			<form method="POST" action="<?= base_url('Testimoni/update/' . $testimonial['id']) ?>" enctype="multipart/form-data">
				<div class="">
					<div class="form-group">
						<label for="">Foto</label>
						<input type="file" class="form-control" name="image">
						<?php if (!empty($testimonial['image'])) : ?>
							<img src="<?= base_url('./upload/' . $testimonial['image']) ?>" alt="Current Image" style="max-width: 200px;">
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="">Deskripsi</label>
						<textarea name="description" rows="5" class="form-control" required><?= $testimonial['description'] ?></textarea>
					</div>
				</div>
				<div class="">
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
					<button type="reset" class="btn btn-secondary"> Reset</button>
				</div>
			</form>


		</div>

	</div>
</div>





<?php include 'componen/footer.php' ?>