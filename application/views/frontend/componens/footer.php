<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container d-md-flex py-4 d-flex justify-content-center align-items-center">
        <div class=" mt-4 ">
            &copy; Copyright <strong><span><a href="" target="_blank"> 2023</a></span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Modal -->
<div class="modal fade" id="modallogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Form Logout</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="color: black;">
                Jika Anda Ingin Logout Silahkan Klik Tombol "Keluar"!
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url('auth_login/logout_user'); ?>" class="btn btn-primary"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Keluar</a>
            </div>
        </div>
    </div>
</div>

<!-- Vendor JS Files -->
<script src="<?= base_url('template_front/lumia/assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/waypoints/noframework.waypoints.js') ?>"></script>
<script src="<?= base_url('template_front/lumia/assets/vendor/php-email-form/validate.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('template/template_admin/ckeditor/ckeditor.js') ?>"></script>

<!-- datatables -->
<!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('template/template_admin/js/demo/datatables-demo.js') ?>"></script>


<!-- Template Main JS File -->
<script src="<?= base_url('template_front/lumia/assets/js/main.js') ?>"></script>


<!-- Register -->
<script>
    $(document).ready(function() {
        $("#tombol_tambah").click(function() {
            // Mengambil nilai input
            var email = $("#email").val();
            var password = $("#password").val();
            var nama_lengkap = $("#nama_lengkap").val();
            var no_hp = $("#no_hp").val();
            // Anda dapat menambahkan lebih banyak variabel sesuai dengan input form yang ada

            // Memeriksa apakah nilai input tidak kosong
            if (email === '' || password === '' || nama_lengkap === '' || no_hp === '') {
                // Menampilkan pesan kesalahan jika ada input yang kosong
                Swal.fire({
                    title: "Error!",
                    text: "Mohon lengkapi semua kolom.",
                    icon: "error"
                });
                return; // Menghentikan eksekusi fungsi jika ada input yang kosong
            }

            // Memeriksa apakah email sesuai dengan format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                // Menampilkan pesan kesalahan jika email tidak sesuai format
                Swal.fire({
                    title: "Error!",
                    text: "Format email tidak valid.",
                    icon: "error"
                });
                return; // Menghentikan eksekusi fungsi jika email tidak sesuai format
            }

            // Serialize form data
            var data = $('#form').serialize();

            // Melanjutkan dengan AJAX hanya jika tidak ada input yang kosong dan email sesuai format
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url(); ?>register/AksiInsertuser",
                data: data,
                success: function(response) {
                    Swal.fire({
                        title: "Success!",
                        text: "Anda Sudah Registrasi, Silahkan Login!",
                        icon: "success"
                    }).then((result) => {
                        // Check if the user clicked "OK"
                        if (result.isConfirmed || result.isDismissed) {
                            // Redirect to a new page
                            window.location.href = "<?php echo base_url(); ?>Auth_login/index";
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        $("#Ubah").click(function() {
            // Mengambil nilai input
            var password_lama = $("#pass_lama").val();
            var password_baru = $("#pass_new").val();
            var konfirmasi_password = $("#conf_pass").val();

            // Anda dapat menambahkan lebih banyak variabel sesuai dengan input form yang ada

            // Memeriksa apakah nilai input tidak kosong
            if (password_lama === '' || password_baru === '' || konfirmasi_password === '') {
                // Menampilkan pesan kesalahan jika ada input yang kosong
                Swal.fire({
                    title: "Error!",
                    text: "Mohon lengkapi semua kolom.",
                    icon: "error"
                });
                return; // Menghentikan eksekusi fungsi jika ada input yang kosong
            }

            // Serialize form data
            var data = $('#form_pass').serialize();

            // Melanjutkan dengan AJAX hanya jika tidak ada input yang kosong dan email sesuai format
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url(); ?>ganti_password/Aksiubahpassword",
                data: data,
                success: function(response) {

                    console.log(response)

                    Swal.fire({
                        title: "Success!",
                        text: "Anda sudah berhasil ganti password baru, Silahkan Login!",
                        icon: "success"
                    }).then((result) => {
                        // Check if the user clicked "OK"
                        if (result.isConfirmed || result.isDismissed) {
                            // Redirect to a new page
                            window.location.href = "<?php echo base_url(); ?>Auth_login/index";
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>


<!-- <script>
    $(document).ready(function(){
        $("#tombol_tambah").click(function(){
        // Mengambil nilai input
        var email = $("#email").val();
        var password = $("#password").val();
        var nama_lengkap = $("#nama_lengkap").val();
        var no_hp = $("#no_hp").val();
        // Anda dapat menambahkan lebih banyak variabel sesuai dengan input form yang ada

        // Memeriksa apakah nilai input tidak kosong
        if (email === ''  || password === '' || nama_lengkap === ''  || no_hp === '') {
            // Menampilkan pesan kesalahan jika ada input yang kosong
            Swal.fire({
                title: "Error!",
                text: "Mohon lengkapi semua kolom.",
                icon: "error"
            });
            return; // Menghentikan eksekusi fungsi jika ada input yang kosong
        }

        // Serialize form data
        var data = $('#form').serialize();

        // Melanjutkan dengan AJAX hanya jika tidak ada input yang kosong
        $.ajax({
            type    : 'POST',
            url     : "<?php echo base_url(); ?>register/AksiInsertuser",
            data    : data,
            success : function(response){
                Swal.fire({
                    title: "Success!",
                    text: "Anda Sudah Registrasi, Silahkan Login!",
                    icon: "success"
                }).then((result) => {
                    // Check if the user clicked "OK"
                    if (result.isConfirmed || result.isDismissed) {
                        // Redirect to a new page
                        window.location.href = "<?php echo base_url(); ?>Auth_login/index";
                    }
                });
            },
            error   : function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });
    });

    buatkan saya alert ketika inputan bukan email dari script diatas?

</script> -->


<!-- Hubungi -->
<script>
    $(document).ready(function() {
        $("#tombol_hub").click(function() {
            // Mengambil nilai input
            var nama_pengirim = $("#nama_pengirim").val();
            var email_pengirim = $("#email_pengirim").val();
            var telepon_pengirim = $("#telepon_pengirim").val();
            var pesan_pengirim = $("#pesan_pengirim").val();
            // Anda dapat menambahkan lebih banyak variabel sesuai dengan input form yang ada

            // Memeriksa apakah nilai input tidak kosong
            if (nama_pengirim === '' || email_pengirim === '' || telepon_pengirim === '' || pesan_pengirim === '') {
                // Menampilkan pesan kesalahan jika ada input yang kosong
                Swal.fire({
                    title: "Error!",
                    text: "Mohon lengkapi semua kolom.",
                    icon: "error"
                });
                return; // Menghentikan eksekusi fungsi jika ada input yang kosong
            }

            // Serialize form data
            var data = $('#form_hub').serialize();

            // Melanjutkan dengan AJAX hanya jika tidak ada input yang kosong
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url(); ?>Hubungi_kami/AksiInserHubungi",
                data: data,
                success: function(response) {
                    Swal.fire({
                        title: "Success!",
                        text: "Pesan Anda sudah Terkirim",
                        icon: "success"
                    }).then((result) => {
                        // Check if the user clicked "OK"
                        if (result.isConfirmed || result.isDismissed) {
                            // Redirect to a new page
                            window.location.href = "<?php echo base_url(); ?>Hubungi_kami";
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        $("#tombol_donor").click(function() {
            // Mengambil nilai input
            var user_id = $('#user_id').val();
            var no_kartudonor = $("#no_kartudonor").val();
            var golongan_darah = $("#golongan_darah").val();
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
            if (no_kartudonor === '' || golongan_darah === '' || bersedia_donor_puasa === '' || bersedia_donor_diluar_rutin === '' || donor_terakhir === '' || donor_keberapa === '' || tempat_lahir === '' || alamat_kantor === '' || no_telepon_kantor === '' || golongan_darah === '' || no_ktp === '' || alamat === '' || pekerjaan === '' || jenis_kelamin === '' || tempat_lahir === '' || tgl_lahir === '' || alamat_kantor === '' || no_telepon_kantor === '' || user_id === '') {
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
                type: 'POST',
                url: "<?php echo base_url(); ?>donor_darah/AksiInsertDonor",
                data: data,
                success: function(response) {

                    Swal.fire({
                        title: "Success!",
                        text: "Anda Sudah Mengisi, Form Donor!",
                        icon: "success"
                    }).then((result) => {
                        // Check if the user clicked "OK"
                        if (result.isConfirmed || result.isDismissed) {
                            // Redirect to a new page
                            window.location.href = "<?php echo base_url(); ?>donor_darah/index";
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>




<!-- autocomplete -->
<script>
    $(document).ready(function() {
        $("#noktp").autocomplete({
            source: "<?php echo site_url('donor_darah/get_autocompletes') ?>",

            select: function(event, ui) {

                $('[name="noktp"]').val(ui.item.nama);
                $('[name="nama_lengkap"]').val(ui.item.nama);
                $('[name="tgl_lahir"]').val(ui.item.tgl);
                $('[name="jenis_kelamin"]').val(ui.item.jk);
                $('[name="email"]').val(ui.item.mail);
                $('[name="alamat_rumah"]').val(ui.item.alamat);
                $('[name="no_telepon"]').val(ui.item.no_hp);
                $('[name="pekerjaan"]').val(ui.item.kerja);
                $('[name="tempat_lahir"]').val(ui.item.tempatlahir);
                $('[name="umur"]').val(ui.item.umur);
            }
        });
    });
</script>

<script>
    const password = document.getElementById('password'); // id dari input password
    const showHide = document.getElementById('showHide'); // id span showHide dalam input group password

    password.type = 'password'; // set type input password menjadi password
    showHide.innerHTML = '<i class="bi bi-eye"></i>'; // masukan icon eye dalam icon bootstrap 5
    showHide.style.cursor = 'pointer'; // ubah cursor menjadi pointer
    // jadi ketika span di hover maka cursornya berubah pointer

    showHide.addEventListener('click', () => {
        // ketika span diclick
        if (password.type === 'password') {
            // jika type inputnya password
            password.type = 'text'; // ubah type menjadi text
            showHide.innerHTML = '<i class="bi bi-eye-slash"></i>'; // ubah icon menjadi eye slash
        } else {
            // jika type bukan password (text)
            showHide.innerHTML = '<i class="bi bi-eye"></i>'; // ubah icon menjadi eye
            password.type = 'password'; // ubah type menjadi password
        }
    });
</script>


<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {

    // Tanggal hari ini
    var today = new Date();
    today.setHours(0, 0, 0, 0); // Set waktu menjadi tengah malam

    // Tanggal target (misalnya, 7 hari dari sekarang)
    var targetDate = new Date(today);
    targetDate.setDate(today.getDate() + 7); // Misalnya, hitung mundur selama 7 hari dari sekarang

    var countdownElement = document.getElementById('countdown');

    function updateCountdown() {
        var now = new Date();
        // now.setHours(0, 0, 0, 0); // Set waktu menjadi tengah malam

        // Pastikan tanggal target lebih besar dari tanggal hari ini
        if (targetDate > now) {
            var difference = targetDate - now;

            var days = Math.floor(difference / (1000 * 60 * 60 * 24));
            var months = Math.floor(days / 30.44); // Rata-rata bulan dalam sehari
            days = days % 30.44; // Sisa hari setelah dihitung bulan

            var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((difference % (1000 * 60)) / 1000);

            // Update HTML elements with the calculated values
            document.getElementById('days').innerText = formatTime(days);
            document.getElementById('months').innerText = formatTime(months);
            document.getElementById('hours').innerText = formatTime(hours);
            document.getElementById('minutes').innerText = formatTime(minutes);
            document.getElementById('seconds').innerText = formatTime(seconds);

        } else {
            // Tanggal target sudah berlalu, hentikan hitung mundur atau lakukan aksi sesuai kebutuhan
            clearInterval(intervalId);
            document.getElementById('countdown').innerText = 'Waktu Sudah Habis';
        }
    }

    function formatTime(time) {
        return time < 10 ? '0' + time : time;
    }

    // Initial update and set interval to update every second
    var intervalId = setInterval(updateCountdown, 1000);
});


</script> -->


<!-- coutdown -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var targetDatetime = new Date('<?php echo $targetDatetime; ?>');
        var countdownElement = document.getElementById('countdown');

        var instasion = '<?php echo $instansi; ?>';
        var keg = '<?php echo $kegiatan; ?>';
        var keterangan = '<?php echo $ket; ?>';


        function updateCountdown() {
            var now = new Date();
            var difference = targetDatetime - now;

            var days = Math.floor(difference / (1000 * 60 * 60 * 24));
            var months = Math.floor(difference / (1000 * 60 * 60 * 24 * 30.44));
            var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((difference % (1000 * 60)) / 1000);

            // Update HTML elements with the calculated values
            document.getElementById('days').innerText = formatTime(days);
            document.getElementById('months').innerText = formatTime(months);
            document.getElementById('hours').innerText = formatTime(hours);
            document.getElementById('minutes').innerText = formatTime(minutes);
            document.getElementById('seconds').innerText = formatTime(seconds);
            document.getElementById('instansi_saja').innerText = instasion;
            document.getElementById('judul_kegiatan').innerText = keg;
            document.getElementById('keras').innerText = keterangan;

        }

        function formatTime(time) {
            return time < 10 ? '0' + time : time;
        }

        // Initial update and set interval to update every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
    });
</script>



</body>

</html>