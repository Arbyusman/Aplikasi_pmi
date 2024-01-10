<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>PMI - Provinsi Sultra</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?= base_url('template/template_admin/img/hospital.png') ?>">
	<link href="<?= base_url('template_front/lumia/assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">
	<link href="<?= base_url('template/template_admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('template_front/lumia/assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?= base_url('template_front/lumia/assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
	<link href="<?= base_url('template_front/lumia/assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
	<link href="<?= base_url('template_front/lumia/assets/vendor/glightbox/css/glightbox.min.css')?>" rel="stylesheet">
	<link href="<?= base_url('template_front/lumia/assets/vendor/swiper/swiper-bundle.min.css')?>" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('template_front/lumia/assets/css/style.css') ?>" rel="stylesheet">

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	
</head>

<body style="overflow-x: hidden;">



	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center">
		<div class="container d-flex align-items-center">

			<div class="logo me-auto">
				<h6><a href=""><img src="<?= base_url('template/template_admin/img/hospital.png') ?>" width="50" alt=""> <b>PMI Sultra</b></a></h6>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>

			<nav id="navbar" class="navbar order-last order">
				<ul>
					<li><a class="nav-link scrollto" href="<?= base_url('Beranda') ?>">Beranda</a></li>
					<li><a class="nav-link scrollto" href="<?= base_url('Tentang') ?>">Tentang</a></li>
					<li><a class="nav-link scrollto" href="<?= base_url('Jadwal_kegiatan') ?>">Jadwal Kegiatan</a></li>
					<li><a class="nav-link scrollto" href="<?= base_url('Donor_darah')?>">Donor Darah</a></li>
					<li><a class="nav-link scrollto" href="<?= base_url('hubungi_kami')?>">Hubungi Kami</a></li>

					<?php if ($this->session->userdata('status') != 'login' ){ ?>
						
					<?php }else{ ?>

						<!-- <li style="margin-left: 10px;">
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modallogout">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
							</button>
						</li> -->

						<li style="margin-left: 20px;" class="dropdown">
							<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Actions
							</button>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<li><a class="dropdown-item" href="<?=base_url('Ganti_password_user')?>">Ganti Password</a></li>
								<li><a class="dropdown-item" type="button"  href="#" data-bs-toggle="modal" data-bs-target="#modallogout">Logout</a></li>
							</ul>
						</li>


					<?php } ?>

				</ul>

				<i class="bi bi-list mobile-nav-toggle"></i>


			</nav><!-- .navbar -->

		<!-- <div class="header d-flex align-items-center" style="padding-left: 20px;">
			<a href="#" class="btn btn-primary">Login</a>
		</div>

		<div class="header d-flex align-items-center" style="padding-left: 5px;">
			<a href="#" class="btn btn-warning">Register</a>
		</div> -->

	</div>
</header><!-- End Header -->


