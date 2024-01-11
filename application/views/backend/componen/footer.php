<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Your Website 2023</span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Apakah Anda Ingin Logout?</h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<div class="modal-body">Pilih Tombol "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
		<div class="modal-footer">
			<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			<a class="btn btn-primary" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
		</div>
	</div>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('template/template_admin/')?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('template/template_admin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('template/template_admin/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('template/template_admin/')?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('template/template_admin/')?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('template/template_admin/')?>js/demo/chart-area-demo.js"></script>


<!-- Load Select2 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />

<!-- Load Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<!-- Page level plugins -->
<script src="<?= base_url('template/template_admin/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('template/template_admin/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('template/template_admin/ckeditor/ckeditor.js') ?>"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Page level custom scripts -->
<script src="<?= base_url('template/template_admin/js/demo/datatables-demo.js') ?>"></script>








<script>
    $(document).ready(function(){
        $("#tombol_donor").click(function(){
        // Mengambil nilai input
        var user_id = $('#user_id').val();
        var email = $('#email').val();
        var nama_lengkap = $('#nama_lengkap').val();
        var no_hp = $('#no_hp').val();
        var no_kartudonor = $("#no_kartudonor").val();
        var golongan_darah_id = $("#golongan_darah_id").val();
        var bersedia_donor_puasa = $("#bersedia_donor_puasa").val();
        var bersedia_donor_diluar_rutin = $("#bersedia_donor_diluar_rutin").val();
        var donor_terakhir = $("#donor_terakhir").val();
        var donor_keberapa = $("#donor_keberapa").val();
        var no_ktp = $("#no_ktp").val();
        var alamat = $("#alamat").val();
        var pekerjaan = $("#pekerjaan").val();
        var jenis_kelamin = $("#jenis_kelamin").val();
        var tempat_lahir = $("#tempat_lahir").val();
        var tgl_lahir = $("#tgl_lahir").val();
        var alamat_kantor = $("#alamat_kantor").val();
        var no_telepon_kantor = $("#no_telepon_kantor").val();

        // Anda dapat menambahkan lebih banyak variabel sesuai dengan input form yang ada
        // Memeriksa apakah nilai input tidak kosong
        if (email === '' || nama_lengkap === '' || no_hp === '' || no_kartudonor === '' || golongan_darah_id === '' || bersedia_donor_puasa === '' || bersedia_donor_diluar_rutin === '' || donor_terakhir === '' || donor_keberapa === '' || tempat_lahir === '' || alamat_kantor === '' || no_telepon_kantor === '' || golongan_darah_id === '' || no_ktp === '' || alamat === '' || pekerjaan === '' || jenis_kelamin === '' || tempat_lahir === '' || tgl_lahir === '' || alamat_kantor === '' || no_telepon_kantor === '' || user_id === '') {
            // Menampilkan pesan kesalahan jika ada input yang kosong
            Swal.fire({
                title: "Error!",
                text: "Mohon lengkapi semua kolom.",
                icon: "error",
                timer: 100000, // Waktu tampilan pesan dalam milidetik (misalnya, 3000ms atau 3 detik)
            });
            return; // Menghentikan eksekusi fungsi jika ada input yang kosong

        }

        // Serialize form data
        var data = $('#form_donor').serialize();

        // Melanjutkan dengan AJAX hanya jika tidak ada input yang kosong
        $.ajax({
            type    : 'POST',
            url     : "<?php echo base_url(); ?>donor_darah/AksiInsertDonor",
            data    : data,
            success : function(response){


                Swal.fire({
                    title: "Success!",
                    text: "Anda Sudah Mengisi, Form Donor!",
                    icon: "success"
                }).then((result) => {
                    // Check if the user clicked "OK"
                    if (result.isConfirmed || result.isDismissed) {
                        // Redirect to a new page
                        window.location.href = "<?php echo base_url(); ?>ketersediaan/Create_datapendonor";
                    }
                });
            },
            error   : function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });
    });
</script>



<script>
 $(document).ready(function() {
        // Untuk sunting
        $('#edit-data').on('show.bs.modal', function (event) {

        	var id_data = document.getElementById('id');
        	var hp = document.getElementById('hp_wa');
        	var pesan = document.getElementById('pesan_wa');

        });
    });
</script>


<script>
	$(document).ready(function() {
        var rows = $("#dataTable tbody tr"); // Mendapatkan semua baris tabel

        rows.each(function() {
            var stok_darahDarah = parseInt($(this).find("td:eq(2)").text()); // Mengambil nilai stok_darah dari kolom ke-3

            if (stok_darahDarah === 3) {
                // Menampilkan alert jika stok_darah kurang dari atau sama dengan 3
                alert("Peringatan: Stok Darah tinggal " + stok_darahDarah + " kantong di golongan darah " + $(this).find("td:eq(1)").text());

                 // Tambahkan konfirmasi dialog
                 var confirmNotif = confirm("Apakah Anda ingin mengirim notifikasi ke WhatsApp?");

                // Cek apakah pengguna menekan OK
                if (confirmNotif) {
                    // Redirect ke halaman tertentu setelah menutup alert
                    window.location.href = "<?= base_url('data_user')?>";
                } else {
                    // Pengguna membatalkan, tambahkan logika tambahan atau hapus baris ini jika tidak diperlukan
                    console.log("Pengguna membatalkan pengiriman notifikasi.");
                }

            }
        });
    });
</script>

<script>
    document.getElementById('kirimButton').addEventListener('click', function () {
        var pesanInput = document.getElementsByName('pesan_wa')[0].value;
        var hpInput = document.getElementsByName('hp_wa')[0].value;

        var whatsappLink = 'https://web.whatsapp.com/send?phone=' + hpInput + '&text=' + encodeURIComponent(pesanInput);

        window.open(whatsappLink, '_blank');
    });
</script>

<script>

    $(document).ready(function() {
        // Inisialisasi Select2 pada elemen dengan class "select2"
        $('.select2').select2();

        // Menangani perubahan pada dropdown email
        $('#user_id').on('change', function() {
            var selectedUserId = $(this).val();

            // Menggunakan AJAX untuk mendapatkan data berdasarkan ID user
            $.ajax({
                url: '<?= base_url('Ketersediaan/get_user_data'); ?>', // Ganti dengan URL controller yang sesuai
                method: 'post',
                data: { id: selectedUserId },
                dataType: 'json',
                success: function(response) {

                    // Mengisi nilai input nama_lengkap dan no_hp dengan data yang diterima
                    $('#nama_lengkap').val(response.nama_lengkap);
                    $('#no_hp').val(response.no_hp);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>




<script>
    $(function() {
        // Mengaktifkan autocomplete pada input dengan ID 'autocomplete'
        $("#email").autocomplete({
            source: function(request, response) {
                // Menentukan URL untuk permintaan data autocomplete
                var url = "<?php echo site_url('ketersediaan/Autocomplete_data'); ?>";

                // Menentukan parameter yang akan dikirimkan ke server
                var params = {
                    term: request.term
                };

                // Melakukan permintaan AJAX ke server
                $.get(url, params, function(data) {
                    // Mengembalikan hasil ke dalam dropdown autocomplete
                    response(data);
                });
            } // Menentukan jumlah karakter sebelum permintaan autocomplete dilakukan
        });
    });
</script> 


<!-- penjumlahan stok_darah -->
<script>
        // Attach input event listeners to the wb, prc, and tc inputs
        $('#wb, #prc, #tc').on('input', function() {
            calculatestok_darah();
        });

        function calculatestok_darah() {
            var wbValue = parseFloat($('#wb').val()) || 0;
            var prcValue = parseFloat($('#prc').val()) || 0;
            var tcValue = parseFloat($('#tc').val()) || 0;

            var total = wbValue + prcValue + tcValue;

            $('#stok_darah').val(total);
        }
    </script>


    <script>
       $(function(){

          CKEDITOR.replace('editor')
      });
  </script>





</body>

</html>