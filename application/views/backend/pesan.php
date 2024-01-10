<?php include 'componen/header.php'?>



<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Pesan</h1>
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
			<h6 class="m-0 font-weight-bold text-primary">Pesan dan Kesan
			</h6>

		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Pengirim</th>
							<th>Telepon Pengirim</th>
							<th>Email Pengirim</th>
							<th>Pesan Pengirim</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$no = 1;
						foreach ($tampil as $key => $data) {

							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data->nama_pengirim; ?></td>
								<td><?= $data->telepon_pengirim; ?></td>
								<td><?= $data->email_pengirim; ?></td>
								<td><?= $data->pesan_pengirim; ?></td>
								<td>
									<a href="<?php echo base_url('pesan/aksiHapusPesan/'). $data->id_pesan ?>"  Onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data ini!')" class="btn btn-danger">Delete</a>
								</td>
							</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>




<?php include 'componen/footer.php'?>