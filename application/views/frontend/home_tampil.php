<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>


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
	<section id="what-we-do" class="what-we-do">
		<div class="container">

			<div class="pr-10">
				<h2>Data Ketersediaan Darah</h2>
				<p>Update Terakhir : <?= date('d-m-Y H:i:s');?> </p>
			</div>

			<div class="row">
				<?php 
				foreach ($tampil as $data) {
					?>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch">
						<div class="icon-box">
							<div class="icon"><i class="fas fa-hospital"></i></div>
							<h4><a href=""> Golongan Darah (<?= $data->golongan_darah; ?>)</a></h4>
							<p>Stok Darah : <?= $data->stok_darah; ?> </p>
						</div>
					</div>

				<?php } ?>

				<!-- Button trigger modal -->

			</div>
		</div>
	</section><!-- End What We Do Section -->


	<!-- ======= Services Section ======= -->
	<section id="services" class="services section-bg">
		<div class="container">

			<!-- <div class="pr-10">
				<h2>Jadwal Kegiatan</h2>
			</div> -->

			<div class="row" style="width: 1210px;">
				<div class="col-md-12" style="width: 1430px;right: 40px;">
					<div class="icon-box table-responsive">
						<div class="pr-10">
							<h2>Jadwal Kegiatan</h2>
						</div>
						<form action="<?= base_url('beranda/AksiInsertdatehariini')?>" method="POST">
							<div class="form-group">
								<label>Filter</label>
								<input  type="datetime-local" class="form-control col-md-4 mb-2" name="pilih">
								<button type="submit" class="btn btn-primary">Cari</button>
							</div>
						</form>

						<?php foreach ($jadwal as $data){ 
							?>

							<div class="form-group">
								<label>Waktu</label>
								<input type="text" name="waktu" class="form-control" value="<?= $data->waktu; ?>" readonly>
							</div>
							<div class="form-group">
								<label>Instansi</label>
								<input type="text" name="instansi" class="form-control" value="<?= $data->instansi; ?>" readonly>
							</div>
							<div class="form-group">
								<label>Tempat Kegiatan</label>
								<input type="text" name="tempat_kegiatan" class="form-control" value="<?= $data->tempat_kegiatan; ?>" readonly>
							</div>
							<div class="form-group">
								<label>Jam</label>
								<input type="text" name="jam" class="form-control" value="<?= $data->jam; ?>" readonly>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<textarea class="form-control" name="ket" readonly><?= $data->ket; ?></textarea>
							</div>
							<div class="form-group">
								<label>Update By</label>
								<input type="text" name="update_by" class="form-control" value="<?= $data->update_by; ?>" readonly>
							</div>
							<div class="form-group">
								<label>Update At</label>
								<input type="text" name="update_at" class="form-control" value="<?= $data->update_at; ?>" readonly>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Services Section -->


</main><!-- End #main -->

<?php include'componens/footer.php';?>
