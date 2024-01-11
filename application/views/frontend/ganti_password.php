<?php
date_default_timezone_set('Asia/Jakarta');

include'componens/header.php'; 


$ids = $this->session->userdata('id');


?>


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
			<div class="row" style="">
				<div class="col-md-12">
					<!-- Alert -->
					<?php if ($this->session->flashdata('flash')) : ?>
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-success" role="alert">
									Password  <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>

						</div>
					<?php endif; ?>
					<div class="icon-box table-responsive">
						<div class="pr-10 mb-4">
							<h2 style="color: black;" align="center">Form Ganti Password</h2>
						</div>

						<!-- form daftar -->
						<div class="form-content bk">
							<form method="POST" action="<?= base_url('Ganti_password_user/Aksiubahpassword')?>">
								<fieldset class="scheduler-border">
									<legend class="scheduler-border">Ganti Password</legend>
									<div class="row">
										<div class="col-sm-4">
											<label for="">Password Baru</label>
											<input type="password" class="form-control" id="pass_new" value="" name="pass_new" placeholder="Masukan Password Baru">
											<div class="input-group-append col-sm-1 mt-2">
												<div class="input-group-text">
													<input type="checkbox" onclick="togglePassword('pass_new')"> Show Password
												</div>
											</div>
										</div>
										<div class="col-sm-4">
											<label for="">Konfirmasi Password</label>
											<input type="password" class="form-control" id="conf_pass" value=""  name="conf_pass" placeholder="Masukan Konfirmasi Password">
											<div class="input-group-append col-sm-1 mt-2">
												<div class="input-group-text">
													<input type="checkbox" onclick="togglePassword('conf_pass')"> Show Password
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-1 mt-3">
										<button type="submit" class="btn btn-primary"> Submit</button>
									</div>
								</fieldset>	
								<br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main><!-- End #main -->



<script>
	function togglePassword(inputId) {
		var passwordInput = document.getElementById(inputId);
		if (passwordInput.type === "password") {
			passwordInput.type = "text";
		} else {
			passwordInput.type = "password";
		}
	}
</script>


<?php include'componens/footer.php';?>