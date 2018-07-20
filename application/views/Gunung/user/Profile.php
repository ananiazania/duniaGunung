
<?php $this->load->view('Gunung/user/header') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1> Profil Saya </h1>
</div>

    <div class="container">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <table border="0" class="table table-hover">
      <thead>
      <tr><td> Nama          : </td></tr>
      <tr><td> Jenis Kelamin : </td></tr>
      <tr><td> Alamat        : </td></tr>
      <tr><td> Email         : </td></tr>
      <tr><td> Password      :  </td></tr>

      </thead>
      <?php foreach ($tampil as $key){?>
          <tr>
            <td><?= $key->nama_gunung?></td>
            <td><?= $key->lokasi?></td>
            <td><?= $key->tinggi?></td>
            <td><?= $key->status?></td>
            <td><img src="<?=base_url("assets/Gambar")."/".$key->gambar ?>" alt="" width="100px" height= "100px" srcset=""></td>
            <td><a href="<?= base_url('index.php/User/Detailgunung') ?>" class="btn btn-primary">Lihat Detail </font></a></td>
                      </tr>
          <?php } ?>
        </tbody>
        </table>

            </div>

</html>
