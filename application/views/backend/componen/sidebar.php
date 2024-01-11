
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-20">
			<img src="<?= base_url('template/template_admin/img/hospital.png') ?>" height="60" width="68" alt="">
		</div>
		<div class="sidebar-brand-text">&nbsp;PMI - Sultra</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('dashboard')?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
		</li>
		
		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>Donor Darah</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<!-- <a class="collapse-item" href="<?= base_url('ketersediaan')?>">Ketersediaan Darah</a>
					<a class="collapse-item" href="<?= base_url('golongan_darah_id')?>">Golongan Darah</a> -->
					<a class="collapse-item" href="<?= base_url('ketersediaan/datapendonor')?>">Data Pendonor</a>
					<a class="collapse-item" href="<?= base_url('jadwal')?>">Jadwal Kegiatan</a>
					<a class="collapse-item" href="<?= base_url('data_user')?>">Data User</a>
					<a class="collapse-item" href="<?= base_url('ketersediaan/gabungan')?>">Stok Darah</a>
				</div>
			</div>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">
		<!-- Nav Item - Charts -->
		<li class="nav-item">
			<a class="nav-link" href="<?= base_url('tentang_admin')?>">
				<i class="fas fa-book"></i>
				<span>Tentang</span></a>
			</li>

			<!-- Nav Item - Tables -->
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('kontak')?>">
					<i class="fas fa-phone-square-alt"></i>
					<span>Kontak</span></a>
				</li>


				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('pesan')?>">
						<i class="fas fa-bookmark"></i>
						<span>Pesan</span></a>
					</li>

					<!-- Divider -->
					<hr class="sidebar-divider d-none d-md-block">

					<style>
						
						#sidebarToggle {
							border: none !important;
							border-radius: 50% !important;
						}
					</style>

					<!-- Sidebar Toggler (Sidebar) -->
					<div class="text-center d-none d-md-inline">
						<button class="rounded-circle border-0" id="sidebarToggle"></button>
					</div>


				</ul>
				<!-- End of Sidebar -->

