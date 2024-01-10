<?php include 'componen/header.php'?>



<!-- css -->
<style>

	body{
		background-image: url(https://bit.ly/2KhEw1d);
		background-position-x: center;
		background-position-y: center;
		background-size: cover;
		background-repeat-x: no-repeat;
		background-repeat-y: no-repeat;
		background-attachment: fixed;
		background-origin: initial;
		background-clip: initial;
		background-color: initial;
	}
	
	.top-buffer-1 { margin-top:20px; }
	.top-buffer { margin-top:2px; }
	fieldset.scheduler-border {
		border: 1px groove #ddd !important;
		padding: 0 1.4em 1.4em 1.4em !important;
		margin: 0 0 1.5em 0 !important;
		-webkit-box-shadow:  0px 0px 0px 0px #000;
		box-shadow:  0px 0px 0px 0px #000;
	}

	legend.scheduler-border {
		font-size: 1.2em !important;
		font-weight: bold !important;
		text-align: left !important;
		width:auto;
		padding:0 1px;
		border-bottom:none;
	}
	.login-wrapper {
		width: 100%;
		height: 100%;
		position: absolute;
		display: table;
		z-index: 2;
	}
	.note
	{
		text-align: center;
		height: 80px;
		background: -webkit-linear-gradient(left, #0072ff, #8811c5);
		color: #fff;
		font-weight: bold;
		line-height: 80px;
	}
	.note p{ font-size:30px; }
	.form-content
	{
		padding: 5%;
		border: 1px solid #ced4da;
		margin-bottom: 2%;
	}
	.form-control{
		border-radius:1.5rem;
	}
	.bk{
		background-color: white;
	}
	@media print {
		body * {
			visibility: visible;
		}
		#section-to-print, #section-to-print * {
			visibility: hidden;
		}
		#section-to-print {
			position: absolute;
			left: 0;
			top: 0;
		}
		.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
			float: left;
		}
		.col-sm-12 {
			width: 100%;
		}
		.col-sm-11 {
			width: 91.66666667%;
		}
		.col-sm-10 {
			width: 83.33333333%;
		}
		.col-sm-9 {
			width: 75%;
		}
		.col-sm-8 {
			width: 66.66666667%;
		}
		.col-sm-7 {
			width: 58.33333333%;
		}
		.col-sm-6 {
			width: 50%;
		}
		.col-sm-5 {
			width: 41.66666667%;
		}
		.col-sm-4 {
			width: 33.33333333%;
		}
		.col-sm-3 {
			width: 25%;
		}
		.col-sm-2 {
			width: 16.66666667%;
		}
		.col-sm-1 {
			width: 8.33333333%;
		}
	}

	legend {
		margin-bottom: 10px;
		margin-top: -16px;
	}
</style>


<main id="main">
	<br>

	<section id="services" class="services section-bg">
		<div class="container">
			<div class="col-md-12">
				<div class="row" style="">
					<!-- Alert -->
					<?php if ($this->session->flashdata('flash')) : ?>
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-success" role="alert">
									Data Form Pendonor  <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="icon-box table-responsive">
						<div class="pr-10 mb-4">
							<h2 style="color: black;" align="center">Form Tambah Donor Darah</h2>
						</div>

						<!-- form daftar -->
						<div class="form-content bk">
							<!-- <a href="<?= base_url('data_user')?>" class="btn btn-primary ml-10" target="_blank">Lihat Data User</a> -->
							<form action="<?= base_url('ketersediaan/Aksi_inputform')?>" method="POST">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Data Akun</legend>
									<div class="row">
										<div class="col-sm-4">
											<label for="">Email</label>
											<select class="form-control select2" id="user_id" name="user_id" required>
												<option value="">- Pilih -</option>
												<?php 
												foreach ($tampil_user as $key) {
													?>
													<option value="<?= $key->id_user?>"><?= $key->email?></option>
												<?php } ?>
											</select>
										</div>
										<div class="col-sm-4">
											<label for="">Nama Lengkap</label>
											<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" required>
										</div>
										<div class="col-sm-4">
											<label for="">No.Hp</label>
											<input type="text" class="form-control" id="no_hp"  name="no_hp" placeholder="Masukan No.Hp" required>
										</div>
									</div>
								</fieldset>	
								<br>

								<!-- Educational Qualification -->
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Data Pendonor</legend>
									<div class="row">
										<div class="col-sm-4">
											<label for="cname">No.Kartu Pendonor</label>
											<input type="text" class="form-control" id="no_kartudonor" placeholder="Masukan No.Kartu" name="no_kartudonor" required>
										</div>
										<div class="col-sm-4">
											<label for="">Golongan Darah</label>
											<select class="form-control" id="golongan_darah" name="golongan_darah" required>
												<option value="">- Pilih -</option>
												<option value="A">A</option>
												<option value="B">B</option>
												<option value="AB">AB</option>
												<option value="O">O</option>
											</select>
										</div>
										<div class="col-sm-4">
											<label for="">Bersedia Donor Di Bulan Puasa</label>
											<select class="form-control" name="bersedia_donor_puasa" id="bersedia_donor_puasa" required>
												<option value="">- Pilih -</option>
												<option value="iya">iya</option>
												<option value="tidak">Tidak</option>
											</select>
										</div>
									</div>
									<div class="row top-buffer mt-4">
										<div class="col-sm-4">
											<label for="">Bersedia Donor Diluar Rutin</label>
											<select class="form-control" name="bersedia_donor_diluar_rutin" id="bersedia_donor_diluar_rutin" required>
												<option value="">- Pilih -</option>
												<option value="iya">iya</option>
												<option value="tidak">Tidak</option>
											</select>
										</div>
										<div class="col-sm-4">
											<label for="">Donor Terakhir</label>
											<input type="datetime-local" name="donor_terakhir" id="donor_terakhir" class="form-control" required>
										</div>
										<div class="col-sm-4">
											<label for="">Donor Keberapa</label>
											<input type="number" name="donor_keberapa" id="donor_keberapa" placeholder="Donor Keberapa" class="form-control" required>
										</div>
									</div>
								</fieldset>
								<br>

								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Data Pribadi</legend>
									<div class="row top-buffer">
										<div class="col-sm-4">
											<label for="">No.Ktp</label>
											<input type="text" name="no_ktp" id="no_ktp" placeholder="Masukan No.KTP" class="form-control" required>
										</div>
										<div class="col-sm-4">
											<label for="">Alamat Rumah</label>
											<textarea class="form-control" name="alamat" id="alamat" size="5" placeholder="Masukan Alamat" required></textarea>
										</div>
										<div class="col-sm-4">
											<label for="">Pekerjaan</label>
											<input type="text" name="pekerjaan" id="pekerjaan" placeholder="Masukan Pekerjaan" class="form-control" required>
										</div>
									</div>
									<div class="row top-buffer mt-4">
										<div class="col-sm-4">
											<label for="cname">Jenis kelamin</label>
											<br>
											<input class="form-check-input ml-2" type="radio" name="flexRadioDefault" id="jenis_kelamin" value="laki-laki" required>
											<label class="form-check-label ml-4" for="jenis_kelamin">
												Laki-laki
											</label>
											<input class="form-check-input ml-4" type="radio" name="flexRadioDefault" id="jenis_kelamin" value="perempuan" required>
											<label class="form-check-label ml-5" for="jenis_kelamin">
												Perempuan
											</label>
										</div>
										<div class="col-sm-4">
											<label for="">Tempat Lahir</label>
											<input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat Lahir" class="form-control" required>
										</div>
										<div class="col-sm-4">
											<label for="">Tanggal Lahir</label>
											<input type="date" name="tgl_lahir" id="tgl_lahir"  class="form-control" required>
										</div>
									</div>
									<div class="row top-buffer mt-4">
										<div class="col-sm-4">
											<label for="">Alamat pekerjaan</label>
											<input type="text" name="alamat_kantor" id="alamat_kantor"  class="form-control" placeholder="Masukan Alamat Kantor">
										</div>
										<div class="col-sm-4">
											<label for="">No.Telphone Kantor</label>
											<input type="text" name="no_telepon_kantor" id="no_telepon_kantor" placeholder="Masukan No.Telphone Kantor"  class="form-control">
										</div>
									</div>
								</fieldset>
								<button type="submit" class="btn btn-primary"> Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



</main><!-- End #main -->



<?php include 'componen/footer.php'?>