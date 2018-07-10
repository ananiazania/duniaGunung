<?php $this->load->view('Gunung/admin/header') ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <php echo from_open('Gunung/create'); ?>
    <legend>Tambah Data Gunung Tertinggi Di Indonesia</legend>

    <div class="from-group">
      <lable for="">Nama Gunung</lable>
      <input type="text" class="from-control" id="nama" name="nama" placeholder="nama">
    </div>

    <div class="from-group">
      <lable for="">Lokasi</lable>
      <input type="text" class="from-control" id="tiket" name="tiket" placeholder="tiket">
    </div

    <div class="from-group">
      <lable for="">Tinggi</lable>
      <input type="text" class="from-control" id="tinggi" name="tinggi" placeholder="tinggi">
    </div>

    <div class="form-group">
    <label for=""> Foto </label>
  <input type="file" name="userfile" placeholder="gambar">
  </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
  <?php  echo form_close();?>
