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
  <h1>Daftag Gunung Tertinggi </h1>
  <p>Di Indonesia</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Cartenzs Pyramid</h3>
      <p><img src="/assets/Gambar/filename.jpg"></p>
      <td><a href="<?=site_url()?>/Gunung/DaftarGunung/<?php echo $key->id ?>"><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    </div>
    <div class="col-sm-4">
      <h3>Puncak Gunung Mandala</h3>
      <p><img src="/assets/Gambar/filename.jpg"></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Punak Gunung Trikola</h3>
      <p><img src="/assets/Gambar/filename.jpg"></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Punak Gunung Trikola</h3>
      <p><img src="/assets/Gambar/filename.jpg"></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Punak Yamin</h3>
      <p><img src="/assets/Gambar/filename.jpg"></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Punak Kerinci</h3>
      <p><img src="/assets/Gambar/filename.jpg"></p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>
