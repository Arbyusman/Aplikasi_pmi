<?php
date_default_timezone_set('Asia/Jakarta');

include 'application/views/frontend/componens/header.php';

?>


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

<main id="main" class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="<?=base_url('templete_login/img/logo_login.png')?>" style="width: 300px;" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="<?= base_url('login') ?>" method="POST">

          <div class="divider d-flex align-items-center my-4">
            <h1 align="center">Silahkan Login</h1>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="username" class="form-control form-control-lg" placeholder="Masukan Username" />
            <label class="form-label" for="form3Example3">Username</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" class="form-control form-control-lg" placeholder="Masukan Password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">

            </div>
            <a href="#!" class="text-body"></a>
          </div>

          <div class="text-center text-lg-start" style="float: right;">
            <button type="submit" class="btn btn-danger btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem;"><i class="fas fa-sign-in-alt"></i> Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>




  </div>
</main>
<?php include 'application/views/frontend/componens/footer.php'; ?>