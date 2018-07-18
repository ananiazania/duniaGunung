<?php $this->load->view('Gunung/Admin/header_all_admin') ?>
<body>
  <!-- Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-8">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: 4dff4d;">
                        <i class="fas fa-users"></i> Form Pendaftaran
                    </div>
                    <div class="card-body">
                    <?php echo form_open_multipart('User/createUser');?>
                    <?php echo validation_errors(); ?>
                    <?php  if(isset($error)){echo $error;} ?>
                    <div class="form-group">
                        <h5>Username</h5>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                        <h5>Jenis Kelamin</h5>
                        <select name="jeniskelamin" id="jeniskelamin" class="form-control" style="height: 40px; width: 190px;">
                                   <option value="laki-laki">Laki-laki</option>
                                   <option value="perempuan">Perempuan</option>
                                   </select>
                        <h5>Alamat</h5>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        <h5>E-mail</h5>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                        <h5>Password</h5>
                        <input type="text" name="password" class="form-control" id="password" placeholder="Password">

                    </div>
                        <button type="submit" class="btn btn-primary">submit</button>
                        <?php echo form_close(); ?>
                    </div>
                        <br>
                        <input type="button" value="Kembali" onclick="history.back(-1)" />
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>
</body>
