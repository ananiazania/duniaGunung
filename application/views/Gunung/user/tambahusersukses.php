<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Halaman Awal</title>

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
<body>
<div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Dunia Gunung</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url()?>/home">Home</a></li>
                <li><a href="<?php echo site_url()?>/about">About</a></li>
                <li><a href="<?php echo site_url()?>/contact">Contact</a></li>
                <li><a href="<?php echo base_url('index.php/user') ?>">Data User</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <a href="<?php echo base_url('index.php/login') ?>" class="navbar-brand">Log Out</a>
              </ul>
              </div><!-- /.navbar-collapse -->
            </div>
          </nav>
        </div>
      </div>
      <?php
			echo "Sukses Simpan Data";
			echo "<br>";
			echo anchor('user/create', 'Masukkan Data Lagi');
 		?>
      <!-- jQuery -->
      <script src="//code.jquery.com/jquery.js"></script>
      <!-- Bootstrap JavaScript -->
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="Hello World"></script>
    </body>
</html>
