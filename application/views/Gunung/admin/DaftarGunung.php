<?php $this->load->view('Gunung/admin/header') ?>

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3>
        Daftar Gunung Tertinggi di Indonesia
    </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Tiket</th>
              <th>Tinggi</th>
              <th>Kota</th>
              <th>Provinsi</th>
              <th>Foto</th>
            </tr>
          </thead>
          </thead>
          <?php foreach ($daftar as $key) {?>
          <tr>
            <td><?= $key->nama?></td>
            <td><?= $key->tiket?></td>
            <td><?= $key->tinggi?></td>
            <td><?= $key->kota?></td>
            <td><?= $key->provinsi ?></td>
            <td><img src="<?php echo base_url('assets/Gambar/').''.$key->foto?>" alt="" width="100px" height= "100px" srcset=""></td>
          </tr>
          <?php } ?>

        </table>
      </div>
    </div>
  </div>
</section>

<?php  ?>
