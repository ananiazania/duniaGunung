<?php $this->load->view('Gunung/admin/headwr'); ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="container">
    <div class = "row">
    <?php echo form_open_multipart('Admin/UpdateGunung/'.$this->uri->segment(3));?>
    <legend><h3></h3>Update Gunung Tertinggi di Indonesia</h3></legend>
    <?php echo validation_errors(); ?>
    <?php  if(isset($error)){echo $error;} ?>

   <div class="form-group" style="width:430px">
     <br><label for="nama">Nama Gunung</label>
     <input type="text" name="nama_gunung" id="nama_gunung" value = "<?php echo $gunung[0]->nama_gunung?>" class="form-control" placeholder="Nama Gunung"  aria-describedby="helpId"><br>

     <label for="lokasi">Lokasi</label><br>
     <input type="text" name="lokasi" id="lokasi" value = "<?php echo $gunung[0]->lokasi?>" class="form-control" placeholder="Lokasi" aria-describedby="helpId"><br>

     <label for="tarif">Tinggi</label>
     <input type="number" name="tinggi" id="tinggi" value = "<?php echo $gunung[0]->tinggi?>" class="form-control" placeholder="Tinggi" aria-describedby="helpId">

     <label for="lokasi">Status</label><br>
     <input type="text" name="status" id="status" value = "<?php echo $gunung[0]->status?>" class="form-control" placeholder="Status" aria-describedby="helpId"><br>


     <input type="file" class="form-control-file" name="gambar" id="gambar" value = "<?php echo $gunung[0]->gambar?>" aria-describedby="userfile">
     <small id="userfile" class="form-text text-primary">Klik Upload file untuk upload gambar wisata</small><br><br>

    <button type="submit" class="btn btn-primary">Submit</button>
   </div>
</div>
