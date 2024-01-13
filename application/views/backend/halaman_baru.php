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

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Golongan Darah

				<!-- Button trigger modal -->
				<div style="float: right;">
					<a href="<?= base_url('golongan_darah') ?>" class="btn btn-primary mb-5"><i class="fas fa-plus"></i> Golongan Darah</a>
					<a href="<?= base_url('Ketersediaan') ?>" class="btn btn-warning mb-5"><i class="fas fa-plus"></i> Ketersediaan Darah</a>
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
							<th>WH</th>
							<th>PRC</th>
							<th>TC</th>
							<th>Stok</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$totalstok_darah = 0;
						$no = 1;
						foreach ($tampil as $data) {

							$golonganDarah = $data->golongan_darah_id;
							$totalstok_darah += $data->stok_darah;

						?>
							<tr>
								<form class="updateForm">
									<td><?= $no++; ?></td>
									<td><?= $data->instansi; ?></td>
									<td><?= $data->nama_golongan; ?></td>
									<!-- <td><?= $data->ketersediaan_darah_id; ?></td> -->
									<td class="col-2">
										<input type="number" class="form-control b-0 wb" name="wb" id="wb<?= $data->ketersediaan_darah_id ?>" value="<?= $data->wb; ?>" />
									</td>
									<td class="col-2">
										<input type="number" class="form-control b-0 prc" name="prc" id="prc<?= $data->ketersediaan_darah_id ?>" value="<?= $data->prc; ?>" />
									</td>
									<td class="col-2">
										<input type="number" class="form-control b-0 tc" name="tc" id="tc<?= $data->ketersediaan_darah_id ?>" value="<?= $data->tc; ?>" />
									</td>
									<td class="col-2">
										<input type="number" class="form-control b-0" name="stok_darah" id="stok_darah_<?= $data->ketersediaan_darah_id ?>" value="<?= $data->stok; ?>" readonly />

									</td>
									<input type="hidden" name="ketersediaan_darah_id" value="<?= $data->ketersediaan_darah_id ?>" />
									<input type="hidden" name="golongan_darah_id" value="<?= $data->gol_darah_id; ?>" />
									<input type="hidden" name="jadwal_kegiatan_id" value="<?= $data->jadwal_kegiatan_id ?>" />
									<input type="hidden" name="instansi" value="<?= $data->instansi ?>" />
								</form>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
	$(document).ready(function() {
		$('.wb, .prc, .tc').on('keyup', function() {
			var row = $(this).closest('tr'); // Get the closest row
			var wbValue = parseInt(row.find('input[name="wb"]').val()) || 0;
			var prcValue = parseInt(row.find('input[name="prc"]').val()) || 0;
			var tcValue = parseInt(row.find('input[name="tc"]').val()) || 0;

			var sum = wbValue + prcValue + tcValue;

			var stokDarahId = row.find('input[name="ketersediaan_darah_id"]').val();
			$('#stok_darah_' + stokDarahId).val(sum);
		});



		$('.wb, .prc, .tc').on('keyup', function() {
			$.ajax({
				url: '<?= base_url('ketersediaan/aksiUpdateKeteranganAjax') ?>',
				type: 'POST',
				data: $('.updateForm').serialize(),
				dataType: 'json',
				success: function(response) {
					console.log("success", response);

				},
				error: function(error) {
					console.log(error);
				}
			});
		});
	});
</script>

<?php include 'componen/footer.php' ?>