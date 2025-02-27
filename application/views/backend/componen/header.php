<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">


	<title><?= $title; ?></title>

	<!-- Custom fonts for this template-->
	<link rel="icon" type="image/png" href="<?= base_url('template/template_admin/img/hospital.png') ?>">
	<link href="<?= base_url('template/template_admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link
	href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('template/template_admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="<?= base_url('template/template_admin/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

	<!-- jQuery UI -->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<!-- cdn -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  


</head>

<body id="page-top">


	<!-- Page Wrapper -->
	<div id="wrapper">


		<?php include 'sidebar.php'?>

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->
			<!-- 	<form
				class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
				<div class="input-group">
					<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
					aria-label="Search" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-primary" type="button">
							<i class="fas fa-search fa-sm"></i>
						</button>
					</div>
				</div>
			</form> -->

			<marquee><h1 class="h3 mt-3 text-gray-800">Selamat Datang Di Aplikasi PMI - Sultra</h1></marquee>

			<!-- Topbar Navbar -->
			<ul class="navbar-nav ml-auto">

				<!-- Nav Item - Search Dropdown (Visible Only XS) -->
				<li class="nav-item dropdown no-arrow d-sm-none">
					<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
					data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-search fa-fw"></i>
				</a>
				<!-- Dropdown - Messages -->
				<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
				aria-labelledby="searchDropdown">
				<form class="form-inline mr-auto w-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small"
						placeholder="Search for..." aria-label="Search"
						aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-search fa-sm"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>

		<!-- Nav Item - Alerts -->
		<!-- Nav Item - Messages -->


		<div class="topbar-divider d-none d-sm-block"></div>

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
			data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata("nama"); ?></span>
			<img class="img-profile rounded-circle"
			src="<?= base_url('template/template_admin/img/undraw_profile.svg')?>">
		</a>
		<!-- Dropdown - User Information -->
		<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
		aria-labelledby="userDropdown">
		<a class="dropdown-item" href="<?= base_url('ganti_password')?>">
			<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
			Ganti Password
		</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
			<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
			Logout
		</a>
	</div>
</li>

</ul>

</nav>
<!-- End of Topbar -->