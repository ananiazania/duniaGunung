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
              <th>no</th>
              <th>Nama</th>
              <th>Tinggi</th>
              <th>Lokasi</th>
              <th>Status</th>
              <th>Perubahan</th>
              <th>foto</th>
            </tr>
          </thead>
          </thead>
          <?php foreach ($tampil as $key) {?>
          <tr>
            <td><?= $key->no?></td>
            <td><?= $key->nama?></td>
            <td><?= $key->tinggi?></td>
            <td><?= $key->lokasi?></td>
            <td><?= $key->status?></td>
            <td><?= $key->perubahan?></td>
            <td><?= $key->alamat ?></td>
            <td><img src="<?php echo base_url('assets/Gambar').''.$key->foto?>" alt="" width="100px" height= "100px" srcset=""></td>
          </tr>
          <?php } ?>

        </table>
      </div>
    </div>
  </div>
</section>
