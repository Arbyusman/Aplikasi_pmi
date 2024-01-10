<?php include 'componen/header.php'?>


<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800">Halaman Jadwal Kegiatan</h1>
	<br>

	<!-- Alert -->
	<?php if ($this->session->flashdata('flash')) : ?>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-success" role="alert">
					Data  <strong>Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Jadwal Kegiatan

				<!-- Button trigger modal -->
				<button type="button" style="float: right;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					<i class="fas fa-plus"></i>	Tambah Data
				</button>
			</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Waktu</th>
							<th>Instansi</th>
							<th>Tempat Kegiatan</th>
							<th>Keterangan</th>
							<th>Update By</th>
							<th>Update At</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach ($tampil as $key => $data) {
							?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data->waktu; ?></td>
								<td><?= $data->instansi; ?></td>
								<td><?= $data->tempat_kegiatan; ?></td>
								<td><?= $data->ket; ?></td>
								<td><?= $data->update_by; ?></td>
								<td><?= $data->update_at; ?></td>
								<td class="text-dark text-nowrap">
									<a href="<?php echo base_url('jadwal/form_edit_jad/'). $data->id_keg ?>" class="btn btn-warning">Edit</a>
									<a href="<?php echo base_url('jadwal/aksiHapusKeg/'). $data->id_keg ?>"  Onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data ini!')" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" action="<?= base_url('jadwal/aksiInsertJad')?>">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="">Waktu</label>
						<input type="datetime-local" class="form-control"  name="waktu" placeholder="Masukan Waktu" required>
					</div> 
					<div class="form-group">
						<label for="">Instansi</label>
						<input type="text" class="form-control"  name="instansi" placeholder="Masukan Instansi" required>
					</div>
					<div class="form-group">
						<label for="">Tempat Kegiatan</label>
						<input type="text" class="form-control"  name="tempat_kegiatan" placeholder="Masukan Tempat Kegiatan" required>
					</div>
					<div class="form-group">
						<label for="">Keterangan</label>
						<textarea class="form-control" name="ket" placeholder="Masukan Keterangan" required></textarea>
					</div> 
					<div class="form-group">
						<label for="">Update By</label>
						<input type="text" class="form-control"  name="update_by" placeholder="Masukan Update By" required>
					</div>
					<div class="form-group">
						<label for="">Update at</label>
						<input type="time" class="form-control"  name="update_at" id="update_at"  placeholder="Masukan Update At" readonly>
					</div> 
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i> Tutup</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
    // Mendapatkan elemen input time berdasarkan id
    var timeInput = document.getElementById('update_at');

    // Mendapatkan jam dan menit saat ini
    var now = new Date();
    var hours = String(now.getHours()).padStart(2, '0');
    var minutes = String(now.getMinutes()).padStart(2, '0');

    // Format string sesuai dengan yang diterima oleh input time (HH:mm)
    var formattedTime = `${hours}:${minutes}`;

    // Set nilai input time ke nilai waktu saat ini
    timeInput.value = formattedTime;
</script>


<?php include 'componen/footer.php'?>