<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>


<style>
	/* Common styles for both desktop and mobile */
	.text-center {
		width: 90px;
	}

	.icon-box {
		overflow-x: hidden;
		border: 2px solid white;
		padding: 10px;
		border-radius: 8px;
		height: 100%; 
	}

	.panel_tgl {
		margin-bottom: 20px;
		background-color: #ffffff;
		border: 1px solid #ddd;
		border-radius: 4px;
		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
		text-align: center;
		width: 77px;
	}

	.panel-heading-tgl {
		padding: 10px 15px;
		border-bottom: 1px solid transparent;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		color: white;
		background-color: #f5f5f5;
		border-color: #ddd;
		background-color: #428bca;
		color: #fff;
		border-bottom: 1px solid transparent;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
	}

	.media-left,
	.media-body {
		display: table-cell;
		vertical-align: top;
	}

	.media-list {
		padding-left: 0;
		list-style: none;
	}

	.media {
		margin-top: 15px;
		display: flex;
		align-items: flex-start;
	}

	.panel-body-tgl {
		padding: 10px;
	}

	.panel {
		margin-bottom: 20px;
		background-color: #ffffff;
		border: 1px solid #ddd;
		border-radius: 4px;
		-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
	}

	.panel-heading {
		padding: 10px 15px;
		border-bottom: 1px solid transparent;
		border-top-left-radius: 3px;
		border-top-right-radius: 3px;
		color: white;
		background-color: #f5f5f5;
		border-color: #ddd;
		background-color: #428bca;
	}

	.panel-title {
		margin-top: 0;
		margin-bottom: 0;
		font-size: 16px;
	}

	.panel-body {
		padding: 15px;
		box-sizing: border-box;
	}

	.panel-footer {
		padding: 10px 15px;
		background-color: #f5f5f5;
		border-top: 1px solid #ddd;
		border-bottom-left-radius: 3px;
		border-bottom-right-radius: 3px;
	}

	.btn_more {
		display: inline-block;
		padding: 6px 12px;
		margin-bottom: 0;
		font-size: 14px;
		font-weight: 400;
		line-height: 1.42857143;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		cursor: pointer;
		background-image: none;
		border: 1px solid transparent;
		border-radius: 4px;
		color: #fff;
		background-color: #337ab7;
		border-color: #2e6da4;
	}

	.btn_more:hover,
	.btn_more:focus {
		color: #fff;
		background-color: #286090;
		border-color: #204d74;
	}

	/* Warna Latar Belakang - Biru */
	.icon-box.hijau {
		background-color: green;
		color: white;
		/* Warna teks putih untuk kontras */
	}

	/* Warna Latar Belakang - Merah */
	.icon-box.merah {
		background-color: red;
		color: white;
		/* Warna teks putih untuk kontras */
	}

	/* Gaya Teks */
	h4 {
		font-size: 20px;
		margin-bottom: 10px;
	}

	p {
		font-size: 16px;
		color: #777;
	}

	/*data box*/
	.data-box {
		border: 2px solid white;
		padding: 10px;
		background-color: none;
		border-radius: 8px;
		transition: background-color 0.3s;
	}

	.data-box p {
		margin: 0;
		color: white;
	}

	.data-box:hover {

		background-color: #808080;
		cursor: pointer;
	}



	/* Styles for devices with a maximum width of 767px (Mobile) */
	@media (max-width: 767px) {
		.col-md-11 {
			width: 100%;
		}

		/* Add additional mobile styles here */
	}

	/* Styles for devices with a minimum width of 768px (Desktop) */
	@media (min-width: 768px) {
		.col-md-11 {
			width: 100%;
			margin-right: 10px;
		}

		/* Add additional desktop styles here */
	}

	.fixed - element {
		position: fixed;
		top: 0;
		left: 0;
	}


	.media-heading{

		margin-left: none;
	}


	/* Custom CSS for Countdown Layout */

	.time-date {
		text-align: right;
	}

	.countd-dd {
		display: inline-block;
		margin-right: 5px; /* Sesuaikan jarak kanan sesuai kebutuhan Anda */
	}


	.tt-label{
		color: white;
	}

	.countd-t-hh{
		color: white;
	}

	.countd-t-mm{
		color: white;
	}

	.countd-t-ss{
		color: white;
	}



	/*coutdown*/

	#countdown {
		display: flex;
		justify-content: space-around;
		max-width: 600px;
		margin: 50px auto;
		background-color: #333;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
	}

	.countdown-item {
		text-align: center;
		color: #fff;
	}

	.countdown-item span {
		display: block;
		font-size: 2em;
		font-weight: bold;
	}

	.countdown-item p {
		font-size: 0.8em;
	}

	#countdown-container {
		text-align: center;
		font-family: Arial, sans-serif;
	}


</style>



<!-- ======= Hero Section ======= -->
<section  class="d-flex flex-column justify-content-center align-items-center">
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 1262px;">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?= base_url('template_front/lumia/assets/img/slide-1.jpeg')?>" class="d-block w-100" height="490" alt="">
				<div class="carousel-caption d-none d-md-block">
					<?php 
					foreach ($jumbotron as $data) {
						?>
						<h1><?= $data->isian_1; ?></h1>
						<h2><?= $data->isian_2; ?></h2>
					<?php } ?>
					<a href="<?= base_url('Auth_login')?>" class="btn btn-primary scrollto"><i class="fas fa-sign-in-alt"></i> Login</a>
					<a href="<?= base_url('Register')?>" class="btn btn-success scrollto"><i class="fas fa-users"></i> Daftar</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('template_front/lumia/assets/img/slide-2.jpg')?>" class="d-block w-100" height="490" alt="">
				<div class="carousel-caption d-none d-md-block">
					<?php 
					foreach ($jumbotron as $data) {
						?>
						<h1><?= $data->isian_1; ?></h1>
						<h2><?= $data->isian_2; ?></h2>
					<?php } ?>
					<a href="<?= base_url('Auth_login')?>" class="btn btn-primary scrollto"><i class="fas fa-sign-in-alt"></i> Login</a>
					<a href="<?= base_url('Register')?>" class="btn btn-success scrollto"><i class="fas fa-users"></i> Daftar</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('template_front/lumia/assets/img/slide-3.jpg')?>" class="d-block w-100" height="490" alt="">
				<div class="carousel-caption d-none d-md-block">
					<?php 
					foreach ($jumbotron as $data) {
						?>
						<h1><?= $data->isian_1; ?></h1>
						<h2><?= $data->isian_2; ?></h2>
					<?php } ?>
					<a href="<?= base_url('Auth_login')?>" class="btn btn-primary scrollto"><i class="fas fa-sign-in-alt"></i> Login</a>
					<a href="<?= base_url('register')?>" class="btn btn-success scrollto"><i class="fas fa-users"></i> Daftar</a>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= What We Do Section ======= -->
	<section id="what-we-do" class="what-we-do" style="padding:19px;">
		<div class="container fixed-element">
			<div class="pr-10">
				<h2 style="color: black;">Data Ketersediaan Darah</h2>
				<p>Update Terakhir : <?= date('d-m-Y H:i:s');?> </p>
			</div>

			<div class="row fixed-element">
				<?php 
				foreach ($tampil as $data) {
					 // Tentukan kelas warna latar belakang berdasarkan nilai stok
					$warna_latar = ($data->stok > 9) ? 'hijau' : 'merah';
					?>

					<div class="col-lg-3 col-md-6 align-items-stretch">
						<div class="icon-box <?= $warna_latar; ?>">
							<div class="icon">
								<i class="fas fa-hospital"></i>
							</div>
							<h4 class="fixed-element">Golongan Darah (<?= $data->nama_golongan; ?>)</h4>

							<div class="data-box fixed-element">
								<p>WB: <?= $data->wb; ?></p>
								<p>PRC: <?= $data->prc; ?></p>
								<p>TC: <?= $data->tc; ?></p>
							</div>
							<br>
							<h5 style="color: white;">Stok Darah : <?= $data->stok; ?> </h5>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>


	<!-- counter -->
	<section id="what-we-do" class="what-we-do" style="padding:19px;">
		<br>
		<br>
		<div class="pr-10">
			<h2 style="color: black;" align="center"><u>Halaman Counter</u></h2>
		</div>
		<br>
		<br>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
		<!-- Custom Files -->
		<link type="text/css" rel="stylesheet" href="<?= base_url('template_front/counter/')?>src/css/particles.css">
		<link type="text/css" rel="stylesheet" href="<?= base_url('template_front/counter/')?>src/css/main.css?v=0.04">
		<script type="text/javascript" src="<?= base_url('template_front/counter/')?>src/js/countdown.js?v=0.04"></script>

		<div class="">	
			<div class="container">
				<div class="row" style="">
					<div class="col-md-12">
						<div class="icon-box table-responsive" style="background-color: #337ab7;">

							<strong style="font-size: 50px;" align="center" id="instansi_saja"></strong>

							<div class="row">
								<div id="countdown">
									<div class="countdown-item">
										<span id="months">00</span>
										<p>Months</p>
									</div>
									<div class="countdown-item">
										<span id="days">00</span>
										<p>Days</p>
									</div>
									<div class="countdown-item">
										<span id="hours">00</span>
										<p>Hours</p>
									</div>
									<div class="countdown-item">
										<span id="minutes">00</span>
										<p>Minutes</p>
									</div>
									<div class="countdown-item">
										<span id="seconds">00</span>
										<p>Seconds</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col container-fluid">
									<strong style="font-size: 50px;" id="judul_kegiatan"></strong>
									<br>
									<p id="keras" style="color: white;"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ======= Services Section ======= -->
	<section id="services" class="services section-bg">
		<div class="container">
			<div class="row" style="">
				<div class="col-md-12">
					<div class="icon-box table-responsive">
						<div class="pr-10 mb-4">
							<h2 style="color: black;" align="center">Jadwal Kegiatan</h2>
						</div>
						<!-- panel -->
						<div class="col-md-11">
							<div class="panel-body">
								<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Calender Event</h3>
									</div>
									<ul class="media-list">
										<?php
										foreach ($jadwal as $data) {
											$waktu = strtotime($data->waktu);
											$tanggal = date('d', $waktu);
											$bulan = date('M', $waktu);

											?>
											<li class="media">
												<div class="media-left">
													<div class="panel-body">
														<div class="panel_tgl">
															<div class="panel-heading-tgl">
																<span class="text-center">
																	<?= $bulan ?>	
																</span>
															</div>
															<div class="panel-body-tgl text-primary">
																<span class="text-center">
																	<?= $tanggal ?>	
																</span>
															</div>
														</div>
													</div>
												</div>
												<div class="media-body">
													<h4 class="media-heading">
														<?= $data->instansi ?>
													</h4>
													<p><?= $data->ket ?></p>
												</div>
											</li>
										<?php } ?>
									</ul>
									<div class="panel-footer">
										<a href="<?= base_url('beranda/TampilJadwalKegiatan')?>" class="btn_more btn-primary btn-block">More Events »</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Services Section -->
</main><!-- End #main -->




<?php include'componens/footer.php';?>

