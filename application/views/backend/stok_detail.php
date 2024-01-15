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
			<h6 class="m-0 font-weight-bold text-primary">

				<!-- Button trigger modal -->
				<div style="float: right;">
					<a href="<?= base_url('ketersediaan/gabungan') ?>" class="btn btn-primary mb-5 d-flex align-items-center"><i class="fas fa-arrow-left mr-2"></i> kembali</a>
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
							<th>Golongann Darah</th>
							<th>WB</th>
							<th>PRC</th>
							<th>TC</th>
							<th>Stok</th>
						</tr>
					</thead>
					<tbody id="body-data">
						<?php
						$no = 1;
						?>
						<tr>
							<div>
								<td><?= $no++; ?></td>
								<td><?= $jadwal->instansi; ?></td>
								<td>
									<?php
									foreach ($darah as $darahItem) {
									?>
										<input type="text" value="<?= $darahItem->name ?>" class="form-control prc" readonly /><br />
									<?php } ?>
								</td>
								<?php
								foreach ($jenis_darah as $jenisDarahItem) {
								?>
									<td>
										<?php
										$value = 0;
										foreach ($darah as $darahItem) {

											foreach ($data as $dataItem) {
												// var_dump($dataItem);
												// die;
												if ($jenisDarahItem->id == $dataItem->jenis_darah_id && $darahItem->id == $dataItem->darah_id && $jadwal->id == $dataItem->jadwal_id) {
													$value = $dataItem->jumlah_darah_jenis_total;
												}
											}
										?>

											<input type="number" value="<?= isset($value) ? $value : 0 ?>" placeholder="<?= $jenisDarahItem->name; ?>" data-jadwal-id="<?= $jadwal->id; ?>" data-darah-id="<?= $darahItem->id; ?> " data-jenis-id="<?= $jenisDarahItem->id; ?>" class="form-control prc" onchange="updateRequestData($(this))" /><br />
										<?php } ?>
									</td>
								<?php } ?>

								<td>
									<?php echo $stok->total; ?>
								</td>

							</div>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
	$(document).ready(function() {
		function updateRequestData(inputElement) {
			var jadwalId = inputElement.data('jadwal-id');
			var darahId = inputElement.data('darah-id');
			var jenisDarahId = inputElement.data('jenis-id');
			var value = inputElement.val();

			$.ajax({
				url: '<?= base_url("/ketersediaan/create_stok_darah") ?>',
				type: 'POST',
				data: {
					jenis_darah_id: jenisDarahId,
					jadwal_id: jadwalId,
					darah_id: darahId,
					value: value,
				},
				dataType: 'json',
				success: function(response) {
					if (response.status === 'success') {
						console.log(response.message);
					} else {
						console.error(response.message);
					}
				},
				error: function(error) {
					console.error('AJAX error:', error);
				}
			});
		}

		$('.form-control').on('change', function() {
			updateRequestData($(this));
		});
	});









	// const table = document.querySelector('#body-data');

	// //  Get data
	// $.ajax({
	// 	type: 'GET',
	// 	url: '<?= base_url('ketersediaan/getDataGabunganAjax') ?>',
	// 	dataType: 'json',
	// 	success: function(data) {
	// 		console.log(data);
	// 	},
	// 	error: function(xhr, textStatus, errorThrown) {
	// 		console.error("Error: " + errorThrown);
	// 	}
	// });
</script>

<?php include 'componen/footer.php' ?>