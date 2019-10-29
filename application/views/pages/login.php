<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-6 d-none d-lg-block bg-log-image">
                <div class="gradient">
                  
                </div>
              </div>

              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"> Mitra <span class="text-success"> Warong Online</span></h1>
                  </div>

                  <?= $this->session->flashdata('pesan'); ?>
                 
                  <form class="user" method="post" action="<?= base_url('login'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="email" value="<?= set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Masukan email">
                      <?= form_error('email','<span class="text-danger m-4">','</span>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                      <?= form_error('password','<span class="text-danger m-4">','</span>'); ?>
                    </div>

                    <input type="submit" class="btn btn-success btn-user btn-block" name="masuk" value="Masuk">
                  </form>

                 
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('register'); ?>">Daftar Sebagai Mitra</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <footer>
    <a href="<?= base_url('home'); ?>" class="btn btn-icon-split">
      <span class="icon text-gray-600 bg-transparent">
        <i class="fas fa-arrow-left text-success"></i>
      </span>
      <span class="text text-success font-weight-bold">Home</span>
    </a>
  </footer>
  
  <footer>
    Copyright &copy; <?= date('Y'); ?> | <span class="text-success">Warong Online Indonesia</span>
  </footer>