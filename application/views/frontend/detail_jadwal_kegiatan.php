<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 

?>


<main id="main">
	<br>
	<!-- ======= Services Section ======= -->
	<section id="services" class="services section-bg">
		<div class="container">

			<div class="row">
				<div class="row" style="width: 1210px;">
					<div class="col-md-12" style="width: 1430px;">
						<div class="icon-box table-responsive">
							<div class="pr-10">
								<h2>Jadwal Kegiatan</h2>
							</div>
							<form>
								<div class="form-group">
									<label>Waktu</label>
									<input type="text" name="waktu" class="form-control" value="<?= $detail_ket->waktu; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Instansi</label>
									<input type="text" name="instansi" class="form-control" value="<?= $detail_ket->instansi; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Tempat Kegiatan</label>
									<input type="text" name="tempat_kegiatan" class="form-control" value="<?= $detail_ket->tempat_kegiatan; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Jam</label>
									<input type="text" name="jam" class="form-control" value="<?= $detail_ket->jam; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Keterangan</label>
									<textarea class="form-control" name="ket" readonly><?= $detail_ket->ket; ?></textarea>
								</div>
								<div class="form-group">
									<label>Update By</label>
									<input type="text" name="update_by" class="form-control" value="<?= $detail_ket->update_by; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Update At</label>
									<input type="text" name="update_at" class="form-control" value="<?= $detail_ket->update_at; ?>" readonly>
								</div>

							</form>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section><!-- End Services Section -->

</main><!-- End #main -->

<?php include'componens/footer.php';?>