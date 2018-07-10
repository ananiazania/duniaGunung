<?php $this->load->view('Gunung/admin/header'); ?>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> Daftar Gunung Tertinggi</div>
<div class="panel-body">
<table class="table table-striped">

<thead>
         <tr>
         <!-- <th>No</th> -->
         <th>Nama</th>
         <th>Lokasi</th>
         <th>Tinggi</th>
         <th>Foto</th>
         <th>Update</th>
         <th>Delete</th>
         </tr>
        </thead>
        <tbody>
  <?php foreach($daftar as $key) { ?>

    <tr>
      <!-- <td><?php echo $a; ?></td> -->
      <td><?php echo $key->nama_gunung ?></td>
      <td><?php echo $key->lokasi ?></td>
      <td><?php echo $key->tinggi ?></td>
      <td><img src="<?=base_url("assets/Gambar")."/".$key->gambar ?>" alt="" width="100px" height= "100px" srcset=""></td>

      <td><a href="<?=site_url()?>/Gunung/Update/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><a href="<?=site_url()?>/Gunung/Delete/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>

    </tr>
  </tbody>
  <!-- <?php $a++; } ?> -->
</table>
</div>
</div>
</div>
