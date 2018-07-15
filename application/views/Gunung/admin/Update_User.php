<?php $this->load->view('Gunung/admin/header'); ?>
  <!-- Content -->
  <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="background-color: 4dff4d;">
                            <i class="fas fa-users"></i> Tambah User
                        </div>
                        <div class="card-body">
                        <?php echo form_open_multipart('Makan/Update/'.$this->uri->segment(3)); ?>
                        <?php echo validation_errors(); ?>
                        <?php  if(isset($error)){echo $error;} ?>
                        <div class="form-group">
                            <h5>Username</h5>
                            <input type="text" name="username" value="<?php echo $tbuser[0]->usename?>" class="form-control" id="username" placeholder="Username">
                            <h5>Jenis Kelamin</h5>
                                <select name="jeniskelamin" id="jeniskelamin" value="<?php echo $tbuser[0]->jeniskelamin?>" class="form-control" style="height: 40px; width: 190px;">
                                    <option value="admin">Laki-Laki</option>
                                    <option value="user">Perempuan</option>
                                </select>
                            <h5>Alamat</h5>
                            <input type="text" name="alamat" value="<?php echo $tbuser[0]->alamat?>" class="form-control" id="alamat" placeholder="Alamat">
                            <h5>E-mail</h5>
                            <input type="text" name="email" value="<?php echo $tbuser[0]->email?>" class="form-control" id="email" placeholder="Email">
                            <h5>Password</h5>
                            <input type="text" name="password"  value="<?php echo $tbuser[0]->password?>" class="form-control" id="password" placeholder="Password">
                            <h5>Level</h5>
                                <select name="level" id="level" value="<?php echo $tbuser[0]->jeniskelamin?>" class="form-control" style="height: 40px; width: 190px;">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>


                        </div>
                            <button type="submit" class="btn btn-primary">submit</button>
                            <?php echo form_close(); ?>
                        </div>
                            <br>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2"></div>
        </div>
  </div>
