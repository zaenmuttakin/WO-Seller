 <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Profile</h1>

</div>
<!-- /.container-fluid -->

    <div class="col-lg-12 m-auto">
        <div class="card m-3">
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-6">

                        <form action="">
                            <div class="form-group row m-4">
                                <label for="emial" class='col-sm-3 col-form-label'>Email</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control" name="name" value="<?= $mitra['email']; ?>">
                                    <?= form_error('name','<span class="text-danger m-4">','</span>'); ?>
                                </div>
                            </div>

                            <div class="form-group row m-4">
                                <label for="name" class='col-sm-3 col-form-label'>Nama Toko</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="<?= $mitra['name']; ?>">
                                    <?= form_error('name','<span class="text-danger m-4">','</span>'); ?>
                                </div>
                            </div>

                            <div class="form-group row m-4">
                                <label for="name" class='col-sm-3 col-form-label'>Pemilik</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="<?= $mitra['owner']; ?>">
                                    <?= form_error('name','<span class="text-danger m-4">','</span>'); ?>
                                </div>
                            </div>

                            <div class="form-group row pl-4 pr-4 m-auto">
                                <label for="photo" class='col-sm-3 col-form-label'>Foto</label>
                                <div class="col-sm-9 row">
                                    <div class="col-sm-6 mb-3">
                                        <img src="<?= base_url('assets/img/photo-profile/'.$mitra['photo']); ?>" class='img-thumbnail'>
                                    </div>
                                    <div class="col-sm-6 custom-file">
                                        <input type="file" class="custom-file-input" name="photo">
                                        <label for="photo" class="custom-file-label ">Pilih..</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row m-4">
                                <label for="name" class='col-sm-3 col-form-label'>Alamat</label>
                                <div class="col-sm-9">
                                    <textarea name="alamat" class='form-control' rows="5"><?= $mitra['addres']; ?></textarea>                                    
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row m-4">
                            <label for="name" class='col-sm-3 col-form-label'>Koordinat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="<?= $mitra['cordinat']; ?>">
                                <?= form_error('name','<span class="text-danger m-4">','</span>'); ?>
                            </div>
                        </div>
                        
                        <div class="form-group row m-4">
                            <label for="name" class='col-sm-3 col-form-label'>No HP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="<?= $mitra['cordinat']; ?>">
                                <?= form_error('name','<span class="text-danger m-4">','</span>'); ?>
                            </div>
                        </div>

                        <div class="form-group row m-4">
                            <label for="name" class='col-sm-3 col-form-label'>No KTP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="<?= $mitra['cordinat']; ?>">
                                <?= form_error('name','<span class="text-danger m-4">','</span>'); ?>
                            </div>
                        </div>

                        <div class="form-group row m-4">
                            <label for="name" class='col-sm-3 col-form-label'>Setting On</label>
                            <div class="col-sm-9">
                               <select name="setting_on" class="form-control">
                                   <option value="automatic">Otomatis</option>
                                   <option value="manual">Manual</option>
                               </select>
                            </div>
                        </div>

                        <br>
                        <hr>

                        <div class="row">
                            <div class='ml-auto p-3 m-1'>
                                <a href="<?= base_url('dashboard/profile'); ?>" class="btn btn-light btn-icon-split rounded-pill p-2">
                                    <span class="text">kembali</span>
                                </a>
                            </div>
                            <div class='mr-auto p-3 m-1'>
                                <a href="<?= base_url('dashboard'); ?>" class="btn btn-success btn-icon-split rounded-pill p-2">
                                    <span class="text">Simpan</span>
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
    </div>

</div>
<!-- End of Main Content -->