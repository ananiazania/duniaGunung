<?php $this->load->view('Gunung/admin/header') ?>

<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3>
        Daftar Komentar
    </div>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Komentar</th>
              <th>Tanggal</th>
              <th>Alamat</th>
              <th>Pilihan</th>
            </tr>
          </thead>
          </thead>
          <?php foreach ($tampil as $key) {?>
          <tr>
            <td><?= $key->Nama?></td>
            <td><?= $key->Nip?></td>
            <td><?php echo date('d-m-Y',strtotime($key->Tanggal))?></td>
            <td><?= $key->Alamat ?></td>
            <td>
              <div class="btn-group" role="group" aria-label="">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#"><i class="fas fa-edit"></i></button>
                  <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  
              </div>
            </td>
          </tr>
          <?php } ?>

        </table>
      </div>
    </div>
  </div>
</section>
