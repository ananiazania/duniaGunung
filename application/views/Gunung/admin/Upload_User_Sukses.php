<?php $this->load->view('Gunung/admin/header'); ?>
<div class="container-fluid">
      <div class="row">
          <div class="col-md-2"></div>

          <div class="col-md-8">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header" style="background-color: 4dff4d;">
                          <i class="fas fa-users"></i> Selamat
                      </div>
                      <div class="card-body">
                        <?php

                            echo "Edit Data Anda Telah Sukses";

                            echo anchor('Admin/DaftarUser_admin', 'Kembali Ke Data User');
                        ?>


                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-2"></div>
      </div>
</div>
