<?php $this->load->view('Gunung/admin/header'); ?>
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
                        <?php

                            echo "sukses Simpan Data";

                            echo anchor('Admin/Tambah_Gunung', 'Masukkan Data Lagi');
                        ?>


                      </div>
                  </div>
              </div>
          </div>

          <div class="col-md-2"></div>
      </div>
</div>
