<?php $this->load->view('Gunung/admin/header') ?>

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3>
        Daftar User
    </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>username</th>
              <th>Jeniskelamin</th>
              <th>Alamat</th>
              <th>Email</th>
              <th>Password</th>
              <th>Level</th>
              <th>Pilihan</th>
            </tr>
          </thead>
          <?php foreach ($tampil as $key){?>
          <tr>
            <td><?= $key->username?></td>
            <td><?= $key->jeniskelamin?></td>
            <td><?= $key->alamat ?></td>
            <td><?= $key->email ?></td>
            <td><?= $key->password ?></td>
            <td><?= $key->level ?></td>
            <td>
              <div class="btn-group" role="group" aria-label="">
                  <a href="<?= site_url('Admin/UpdateUser') ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                  <a href="<?= site_url('Admin/delete') ?>" class="btn btn-danger"><i class="fas fa-trash""></i></a>
              </div>
            </td>
          </tr>
          <?php } ?>

        </table>
      </div>
    </div>
  </div>
</section>
