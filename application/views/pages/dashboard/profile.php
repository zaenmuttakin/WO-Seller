 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Profile</h1>

</div>
<!-- /.container-fluid -->

<div class="col-lg-12 m-auto">
  <div class="card m-3">
    <div class="card-body">

        <div class="row">
          <div class="col-lg-3 p-3">
            <div class="photo-profile m-auto" style=" background-image: url(<?= base_url('assets/img/photo-profile/'.$mitra['photo']); ?>)"></div>
          </div>
          <div class="col-lg p-3">
            <h4><?= $mitra['name']; ?></h4>
            <label>owner : <span class='text-success'><?= $mitra['owner']; ?></span></label> <br>
            <label class='font-lighter'>bergabung sejak <?= date('d F Y', $mitra['timestamp_date_member']); ?></label>
            <br><br>
            <p><?= $mitra['description']; ?></p>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class='col-lg-9'>
            <div class="row m-auto">
              <div class='text-center ml-5 m-1'>
                <span>Rating</span>
                <p class="h2 mb-0 font-weight-bold text-gray-800">4,6</p>
              </div>
              <div class='text-center ml-5 m-1'>
                <span>Terjual</span>
                <p class="h2 mb-0 font-weight-bold text-gray-800">1110</p>
              </div>
              <div class='text-center ml-5 m-1'>
                <span>Stok</span>
                <p class="h2 mb-0 font-weight-bold text-gray-800">225</p>
              </div>
            </div>
          </div>

          <div class='m-auto p-3'>
            <a href="<?= base_url('dashboard/edit'); ?>" class="btn btn-success btn-icon-split rounded-pill p-1 ml-auto">
              <span class="text">Edit Profile</span>
              <span class="icon bg-transparent">
                <i class="fas fa-arrow-right"></i>
              </span>
            </a>
          </div> 
        </div>

    </div>
  </div>
</div>

</div>
<!-- End of Main Content -->