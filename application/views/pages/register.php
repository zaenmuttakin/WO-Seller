<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">


        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-5">
            <div class="p-5">

              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Daftarkan Toko Anda di <br> <Span class="text-success">Warong
                    Online</Span> Sekarang!</h1>
              </div>

              <form class="user" method="post" action="<?= base_url('register'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="name" value="<?= set_value('name'); ?>" placeholder="Nama Toko">
                  <?= form_error('name','<span class="text-danger m-4">','</span>'); ?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="owner" value="<?= set_value('owner'); ?>" placeholder="Pemilik">
                  <?= form_error('owner','<span class="text-danger m-4">','</span>'); ?>
                </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
                  <?= form_error('email','<span class="text-danger m-4">','</span>'); ?>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="repassword" placeholder="Ulangi Password">
                  </div>
                  <?= form_error('password','<span class="text-danger ml-4">','</span>'); ?>
                </div>

                <input type="submit" class="btn btn-success btn-user btn-block" name="daftar" value="Daftar">

              </form>


              <hr>


              <div class="text-center">
                <label class="small">Dengan mendaftar sebagai mitra warong online berarti anda telah menyetuji <a
                    href="">syarat dan ketentuan </a>yang berlaku</label>
              </div>

              <br>

              <div class="text-center">
                <label class="small">Sudah punya akun Warong Online? <a href="<?= base_url('login'); ?>">Masuk</a></label>
              </div>
            </div>
          </div>


          <div class="col-lg-7 d-none d-lg-block bg-reg-image">
            <div class="gradient">
              <i class="fas fa-store"></i>
              <p class='h2 mr-5 ml-5'>Bergabunglah bersama kami </p>
              <p class= 'mr-5 ml-5'>Gabung dan rasakan kemudahan bertransaksi di Warong Online</p>
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