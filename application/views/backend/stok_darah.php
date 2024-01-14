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
	<?php endif; ?>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form method="POST" action="<?= base_url('Stok_darah/create_stok') ?>" class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<label for="exampleInputEmail1">Pilih Tempat</label>
					<select class="form-control" name="jadwal_kegiatan_id">
						<?php
						foreach ($jadwal as $itemJadwal) {
							echo '
							<option class="" value="' . $itemJadwal->id . '"> ' . $itemJadwal->instansi . ' </option>
							';
						}
						?>
					</select>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Golongan Darah

				<!-- Button trigger modal -->
				<div style="float: right;">
					<a href="<?= base_url('golongan_darah') ?>" class="btn btn-primary mb-5"><i class="fas fa-plus"></i> Golongan Darah</a>
					<button type="button" class="btn btn-secondary mb-5" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-plus"></i> Ketersedian Darah </button>
				</div>
			</h6>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="2px">No.</th>
							<th>Instansi / UPTD</th>
							<th>Golongan Darah</th>
							<th>Stok</th>
							<th width="150px">detail</th>
						</tr>
					</thead>
					<tbody id="body-data">
						<?php
						$no = 1;
						foreach ($stok as $stok_item) {
						?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $stok_item->instansi; ?></td>
								<td>
									<?php
									$totalByJenis = 0;
									foreach ($darah as $darah_item) {
										foreach ($jumlah_jenis as $jumlah_jenis_item) {
											if ($darah_item->id == $jumlah_jenis_item->darah_id) {
												$totalByJenis += $jumlah_jenis_item->total;
											}
										}
										if ($totalByJenis > 0) {
									?>
											<span><?= $darah_item->name ?> <?= $totalByJenis ?></span>
											<hr>
											<br>
									<?php
										}
									}
									?>
								</td>


								<td><?= $stok_item->total; ?></td>
								<td>
									<a href="" class="btn btn-secondary">Detail</a>
									<a href="" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</div>

<?php include 'componen/footer.php' ?>