<?php
include'componens/header.php'; 
?>

<main id="main">

	<!-- ======= What We Do Section ======= -->
	<section id="what-we-do" class="what-we-do">
	</section><!-- End What We Do Section -->

	<!-- ======= About Section ======= -->
	<section id="about" class="about">
		<div class="container">

			<div class="row">
				<div class="col-lg-6">
					<img src="<?= base_url('template_front/lumia/assets/img/sultra.jpg')?>" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0">
					<h3 style="color: #3498db;">Tentang PMI Sultra</h3>
					<br>

					<h3><I>Profil</I></h3>
					<?php
					foreach ($tampil as $data) {
						?>
						<p>	
							<?= $data->profil; ?>
						</p>

					<?php } ?>

					<h3><I>Visi/Misi</I></h3>
					
					<ul>
						<?php
						foreach ($tampil as $data) {
							?>
							<li> <?= $data->visimisi; ?></li>
						<?php } ?>

					</ul>
					
				</div>
			</div>

		</div>
	</section><!-- End About Section -->


</main><!-- End #main -->

<?php include'componens/footer.php';?>