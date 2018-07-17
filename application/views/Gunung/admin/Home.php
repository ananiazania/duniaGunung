<?php $this->load->view('Gunung/admin/header'); ?>

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3>
        Daftar Gunung
    </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Lokasi</th>
              <th>Tinggi</th>
              <th>Status</th>
              <th>Gambar</th>
              <th>Pilihan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($tampil as $key) {?>
            <tr>
              <td><?= $key->nama_gunung?></td>
              <td><?= $key->lokasi?></td>
              <td><?= $key->tinggi ?></td>
              <td><?= $key->status ?></td>
              <td><img src="<?=base_url("assets/Gambar")."/".$key->gambar ?>" alt="" width="100px" height= "100px" srcset=""></td>
              <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="<?= site_url('Admin/UpdateGunungadmin') ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                    <a href="<?= site_url('Admin/UpdateUser') ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr>
          <?php } ?>

          </tbody>

      </table>
    </div>
  </div>
</div>
</section>
