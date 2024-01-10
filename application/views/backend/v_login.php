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
  <link href="templete_login/isi/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
  rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="templete_login/isi/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- data tabel -->
  <link href="templete_login/isi/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <style>

    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>

  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="templete_login/img/logo_login.png" style="width: 300px;" 
          class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="<?= base_url('login')?>" method="POST">

            <div class="divider d-flex align-items-center my-4">
              <h1 align="center">Silahkan Login</h1>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" name="username" class="form-control form-control-lg"
              placeholder="Masukan Username" />
              <label class="form-label" for="form3Example3">Username</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" name="password" class="form-control form-control-lg"
              placeholder="Masukan Password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">

              </div>
              <a href="#!" class="text-body"></a>
            </div>

            <div class="text-center text-lg-start" style="float: right;">
              <button type="submit" class="btn btn-danger btn-md"
              style="padding-left: 2.5rem; padding-right: 2.5rem;"><i class="fas fa-sign-in-alt"></i> Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-danger">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved.
    </div>

  </div>
</section>


<!-- Bootstrap core JavaScript-->
<script src="templete_login/isi/vendor/jquery/jquery.min.js"></script>
<script src="templete_login/isi/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="templete_login/isi/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="templete_login/isi/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="templete_login/isi/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="templete_login/isi/js/demo/chart-area-demo.js"></script>
<script src="templete_login/isi/js/demo/chart-pie-demo.js"></script>

<!-- data table -->
<script src="templete_login/isi/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="templete_login/isi/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="templete_login/isi/js/demo/datatables-demo.js"></script>


</body>

</html>
