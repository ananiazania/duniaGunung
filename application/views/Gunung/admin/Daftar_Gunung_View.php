<?php $this->load->view('Gunung/admin/header'); ?>
  <!-- Content -->
  <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: 4dff4d;">
                            <i class="fas fa-users"></i> Tambah Daftar Gunung
                        </div>
                        <div class="card-body">
                        <?php echo form_open_multipart('Admin/createUser');?>
                        <?php echo validation_errors(); ?>
                        <?php  if(isset($error)){echo $error;} ?>
                        <div class="form-group">
                            <h5>Nama Gunung</h5>
                            <input type="text" name="nama_gunung" class="form-control" id="nama_gunung" placeholder="Nama Gunung">
                            <h5>Lokasi</h5>
                            <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Lokasi">
                            <h5>Tinggi</h5>
                            <input type="text" name="tinggi" class="form-control" id="tinggi" placeholder="Tinggi">

                            <h5>Foto</h5>
                            <input type="file" name="userfile" class="form-control" id="foto" >

                        </div>
                            <button type="button" class="btn btn-success">Success</button>
                        </div>
                            <br>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2"></div>
        </div>
  </div>
