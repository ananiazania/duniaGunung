<?php $this->load->view('Makan/header');?>

<div class="container">
<div class="row">

<legend> Update Data Gunung</legend>
  <!-- var_dump untuk mengecek isi dari $pegawai apa saja -->
  <!-- <?php
  //echo "<pre>";
  //var_dump($dosen); ?> -->
	<?php echo validation_errors();  ?>
<!-- echo form_open('pegawai/update/'.$this->uri->segment(3)) artinya adalah menjalankan controler pegawai,function update
dan segment ke tiga -->
<!-- penjelasan segment
uri segment ci yang dikatakan
1.segment pertama adalah class atau controller
2.segment kedua adalah nama method atau function
3.segment ketiga adalah berupa data berbentuk id yang dikirim
jadi segment ci itu dihitung dari index.php -->
  <?php echo form_open_multipart('Makan/Update/'.$this->uri->segment(3)); ?>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Nama Gunung:</label>
    <div class="col-sm-10">
    <!--PENJELASAN DARI =
      1.Nama pada value adalah nama dari field tablemu sesuaikan huruf besar atau kecil
      2.$pegawai[0]= dikarenakan data yang diambil dari model berupa data berupa array of object dan mengambil array pertama yaitu [0]-->
    <input type="text" name="nama_gunung" class="form-control" id="nama" value="<?php echo $gunung[0]->nama?>" placeholder="nama_gunung"><br>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="Alamat">Lokasi :</label>
    <div class="col-sm-10">
    <input type="text" name="lokasi" class="form-control" id="lokasi" value="<?php echo $gunung[0]->lokasi?>" placeholder="lokasi"><br>
    </div>
    
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Alamat">Tinggi :</label>
    <div class="col-sm-10">
    <input type="text" name="tinggi" class="form-control" id="tinggi" value="<?php echo $gunung[0]->tinggi?>" placeholder="tinggi"><br>
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-sm-2" for="">Foto Gunung :</label>
    <div class="col-sm-10">
    <input type="file" name="userfile" placeholder="Foto" value="<?php echo $gunung[0]->gambar?>"><br>
    <img src=<?=base_url("assets/Gambar")."/".$gunung[0]->gambar?> ?>
    </div>
    <div class="form-group">

    </div>
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary">Submit</button>
    <?php echo form_close(); ?>
    </div>
  </div>
 </div>
 </div>
</form>
