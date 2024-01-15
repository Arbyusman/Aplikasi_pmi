<?php include 'componen/header.php'?>


<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Halaman Dashboard</h1>

	<!-- Content Row -->
	<div class="row">

		<?php
		foreach ($darah as $darah_item) {
			?>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-danger shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Golongan Darah (<?php echo $darah_item->name;?>)</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800">
									<?php
									$totalStok = 0;
									foreach ($stok as $stok_item) {

										if ($darah_item->id == $stok_item->darah_id) {
											$totalStok += $stok_item->total;
										}
									}
									?>

									<span class="hr">
										<?php echo $totalStok; ?>
									</span>

									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>



	<?php include 'componen/footer.php'?>