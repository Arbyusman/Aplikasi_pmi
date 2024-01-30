<?php include 'componen/header.php' ?>

<div class="container-fluid">


	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Stok Darah</h1>
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



	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">
				<div style="float: right;">
					<a href="<?= base_url('Testimoni/create') ?>" class="btn btn-primary mb-5"><i class="fas fa-plus"></i> Testimoni</a>
				</div>
			</h6>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="2px">No.</th>
							<th>Foto</th>
							<th>Description</th>
							<th>Update By</th>
							<th>Update At</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody id="body-data">
						<?php
						$no = 1;
						foreach ($testimonies as $testimoni) {
						?>
							<tr>
								<form class="updateForm">
									<td><?= $no++; ?></td>
									<td>
										<img class="" style="width: 150px; height: 150px;" src="./upload/<?= $testimoni->image; ?>" alt="">
									</td>
									<td>
										<?= $testimoni->description; ?></td>
									<td>
										<?= isset($testimoni->updated_by_username) ? $testimoni->updated_by_username : $testimoni->created_by_username; ?>
									</td>
									<td><?= isset($testimoni->updated_at) ? $testimoni->updated_at : $testimoni->created_at; ?></td>
									<td>

										<a href="">Hapus</a>
										<a href="">Edit</a>

									<td>

								</form>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



<?php include 'componen/footer.php' ?>