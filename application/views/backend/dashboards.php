<?php include 'componen/header.php'?>


<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Halaman Dashboard</h1>

	<!-- Content Row -->
	<div class="row">

		<?php
		foreach ($tampil as $data) {
			?>

			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-danger shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Golongan Darah (<?php echo $data->nama_golongan;?>)</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $data->stok;?></div>
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