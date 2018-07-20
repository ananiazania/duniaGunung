
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
  <h1> Detail Gunung </h1>
</div>

    <div class="container">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <table border="0" class="table table-hover">
      <thead>
      <tr><td> Nama          : <!--</td></tr>-->
      <?php foreach ($tampil as $key){?>
        <!--<tr>  <td>--> <?= $key->nama_gunung?></td> </tr><?php } ?>
      <tr><td> Lokasi :
        <?php foreach ($tampil as $key){?>
          <!--<tr>  <td>--> <?= $key->lokasi?></td> </tr><?php } ?>
      <tr><td> Tinggi        :
        <?php foreach ($tampil as $key){?>
          <!--<tr>  <td>--> <?= $key->tinggi?></td> </tr><?php } ?>
      <tr><td> Status        :   <?php foreach ($tampil as $key){?>
          <!--<tr>  <td>--> <?= $key->status?></td> </tr><?php } ?>
      <tr><td> Gambar    :
          <img src="<?=base_url("assets/Gambar")."/".$key->gambar ?>" alt="" width="100px" height= "100px" srcset="">
          </td></tr>

      </td></tr>
<!--
      </thead>
      <?php foreach ($tampil as $key){?>

          <tr>  <td><?= $key->nama_gunung?></td> </tr>
          <tr>  <td><?= $key->lokasi?></td> </tr>
          <tr>  <td><?= $key->tinggi?></td> </tr>
          <tr>  <td><?= $key->status?></td> </tr>
          <tr ><td><img src="<?=base_url("assets/Gambar")."/".$key->gambar ?>" alt="" width="100px" height= "100px" srcset=""></td>

            <!-- <td><?= $key->gambar?></td> -->
                      </tr>
<!---          <?php } ?> ------->

        </tbody>
        </table>

<br>
Convert pdf <br>
<a href="<?php echo site_url('User/createPDF') ?>" class="btn btn-secondary my-2 my-sm-0 ml-2">Convert PDF</a>
            </div>

</html>
