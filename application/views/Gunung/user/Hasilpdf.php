<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
  </body>
</html>
