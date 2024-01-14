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
					<!-- <a href="<?= base_url('Ketersediaan') ?>" class="btn btn-warning mb-5"><i class="fas fa-plus"></i> Ketersediaan Darah</a> -->
					<!-- <button type="button" class="btn btn-secondary mb-5" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-plus"></i> Ketersedian Darah </button> -->
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
					<tbody id="body-data">
						<?php

						$totalstok_darah = 0;
						$no = 1;
						foreach ($jadwal as $jadwal_item) {


						?>
							<tr>
								<form class="updateForm">
									<td><?= $no++; ?></td>
									<td>
										<?= $jadwal_item->instansi; ?></td>
									<td>
										<?php
										foreach ($darah as $item_darah) {
											// if ($item_darah->nama_golongan) {
											echo '<input class="form-control b-0" data-darah-id=' . $item_darah->id . ' value="' . $item_darah->name . '" readonly/> <br>';
											// }
										}
										?>
									</td>

									<td class="col-2">
										<?php
										foreach ($darah as $item_darah) {
											// if ($item_darah->jadwal_id == $jadwal_item->id) {
											echo '<input type="number"  data-darah-wb-id=' . $item_darah->id . ' class="form-control b-0 wb" name="wb"   /> <br>';
											// }
										}
										?>
									</td>
									<td class="col-2">
										<?php
										foreach ($darah as $item_darah) {
											// if ($item_darah->jadwal_id == $jadwal_item->id) {
											echo '<input type="number"  data-darah-prc-id=' . $item_darah->id . ' class="form-control b-0 prc" name="prc"   /> <br>';
											// }
										}
										?>
									</td>
									<td class="col-2">
										<?php
										foreach ($darah as $item_darah) {
											// if ($item_darah->jadwal_id == $jadwal_item->id) {
											echo '<input type="number"  data-darah-tc-id=' . $item_darah->id . ' class="form-control b-0 tc" name="tc"   /> <br>';
											// }
										}
										?>
									</td>
									<!-- <td class="col-2">
										<?php
										$totalData = 0;
										foreach ($golongan as $item_golongan) {
											$totalData += $item_golongan->stok;
											echo '<input type="number" class="form-control b-0 tc" name="tc"  value="' . $totalData . '"  /> <br>';
										}

										?>

									</td> -->

									<input type="hidden" name="jadwal_id" value="<?= $jadwal_item->id; ?>">

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

			// Update the relevant stok_darah element
			// var stokDarahId = row.find('input[name="ketersediaan_darah_id"]').val();
			// $('#stok_darah_' + stokDarahId).val(sum);

			// AJAX call to update data
			$.ajax({
				url: '<?= base_url('ketersediaan/aksiUpdateStokAjax') ?>',
				type: 'POST',
				data: {
					darah_id: row.find('input[data-darah-id]').data('darah-id'),
					wb: wbValue,
					prc: prcValue,
					tc: tcValue,
				},
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