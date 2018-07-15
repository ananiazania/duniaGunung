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
  <h1>Daftar Gunung Tertinggi </h1>
  <p>Di Indonesia</p>
</div>

<div class="container">


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#WJSlider" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Kembali</span>
    </a>
    <a class="right carousel-control" href="#WJSlider" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Lanjut</span>
    </a>
  </div>
</div>

  <div class="row">
    <div class="col-sm-4">
      <h3>Cartenzs Pyramid</h3>
      <p><img src="<?= base_url('/assets/Gambar/home.1.jpg') ?>" alt="" width="250px" height= "250px" srcset=""></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="submit" class="btn btn-primary">Detail</button>
    </div>
    <br>
    <div class="col-sm-4">
      <h3>Puncak Gunung Mandala</h3>
    <p><img src="<?= base_url('/assets/Gambar/home.2.jpg') ?>" alt="" width="250px" height= "250px" srcset=""></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="submit" class="btn btn-primary">Detail</button>
    </div>
  <br>
    <div class="col-sm-4">
      <h3>Puncak Gunung Trikola</h3>
      <p><img src="<?= base_url('/assets/Gambar/home.3.jpg') ?>" alt="" width="250px" height= "250px" srcset=""></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="submit" class="btn btn-primary">Datail</button>
    </div>
    <br>
    <div class="col-sm-4">
      <h3>Puncak Gunung Trikola</h3>
      <p><img src="<?= base_url('/assets/Gambar/home.4.jpg') ?>" alt="" width="250px" height= "250px" srcset=""></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="submit" class="btn btn-primary">Detail</button>
    </div>
    <br>
    <div class="col-sm-4">
      <h3>Puncak Yamin</h3>
      <p><img src="<?= base_url('/assets/Gambar/home.5.jpg') ?>" alt="" width="250px" height= "250px" srcset=""></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="submit" class="btn btn-primary">Detailt</button>
    </div>
    <br>
    <div class="col-sm-4">
      <h3>Puncak Kerinci</h3>
      <p><img src="<?= base_url('/assets/Gambar/home.6.jpg') ?>" alt="" width="250px" height= "250px" srcset=""></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      <button type="submit" class="btn btn-primary">Detail</button>
    </div>
  </div>
</div>

</body>
</html>
