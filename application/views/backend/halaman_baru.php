<?php 
include 'componen/header.php'
?>

<style>
	.custom-table{border-collapse:collapse;width:100%;border:solid 1px #c0c0c0;font-family:open sans;font-size:11px}
	.custom-table th,.custom-table td{text-align:left;padding:8px;border:solid 1px #c0c0c0}
	.custom-table th{color:#000080}
	.custom-table tr:nth-child(odd){background-color:#f7f7ff}
	.custom-table>thead>tr{background-color:#dde8f7!important}
	.tbtn{border:0;outline:0;background-color:transparent;font-size:13px;cursor:pointer}
	.toggler{display:none}
	.toggler1{display:table-row;}
	.custom-table a{color: #0033cc;}
	.custom-table a:hover{color: #f00;}
	.page-header{background-color: #eee;}
	.tbtns{border: 0;outline: 0;background-color: transparent;font-size: 13px;cursor: pointer;}

</style>
<script>
	$(document).ready(function () {
		$(".tbtn").click(function () {
			$(this).parents(".custom-table").find(".toggler1").removeClass("toggler1");
			$(this).parents("tbody").find(".toggler").addClass("toggler1");
			$(this).parents(".custom-table").find(".fa-minus-circle").removeClass("fa-minus-circle");
			$(this).parents("tbody").find(".fa-plus-circle").addClass("fa-minus-circle");
		});
	});
</script>


<div class="container">
	<div style="float: right;">
		<a href="<?= base_url('golongan_darah')?>" class="btn btn-primary mb-5"><i class="fas fa-plus"></i> Golongan Darah</a>
		<a href="<?= base_url('Ketersediaan') ?>" class="btn btn-warning mb-5"><i class="fas fa-plus"></i> Ketersediaan Darah</a>
	</div>
	<table class="custom-table">
		<thead>
			<tr>
				<th>X</th>
				<th>Instansi / UPTD</th>
				<th>WH</th>
				<th>PRC</th>
				<th>TC</th>
				<th>Stok</th>

			</tr>
		</thead>
		
		<tr>
			<?php
			foreach ($tampil as $data) {
				?>
				<tbody>
					<td colspan="6" class="page-header">
						<button type="button" class="tbtn">
							<i class="fa fa-plus-circle fa-minus-circle"></i><?= $data->instansi; ?>
						</button>
						<button type="button" class="tbtns ml-12">
							<?= $data->update_time; ?>
						</button>

						<div style="float: right;">
								<!-- <button class="btn btn-warning">Edit</button>
									<button class="btn btn-danger">Delete</button> -->
								</div>
							</td>
						</tr>

						<tr class="toggler toggler1">
							<td rowspan="5"></td>
							<?php
							foreach ($data->kegiatan as $row_kegiatan) { 
								?>
								<tr rowspan="5">
									<td><?= $row_kegiatan->nama_golongan; ?></td>
									<td><?= $row_kegiatan->wb; ?></td>
									<td><?= $row_kegiatan->tc; ?></td>
									<td><?= $row_kegiatan->prc; ?></td>
									<td><?= $row_kegiatan->stok_darah; ?></td>							
								</tr>
							<?php } ?>
						</tr>
					</tbody>
				<?php }?>
			</table>
		</div>	


		<?php include 'componen/footer.php'?>