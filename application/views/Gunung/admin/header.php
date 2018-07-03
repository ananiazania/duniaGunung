<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="FaberNainggolan">
    <title>CodeIgniter dengan Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap bootstrap-dateptimeicker.css-->
    <link href="<base_url();?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    </head>
    <body>
      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CRUD CI Bootstrap</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?=site_url()?>/Makan/tampil"><i class="glyphicon glyphicon-plus"></i>List Data</a></li>
              <li><a href="<?=site_url()?>/Makan/create"><i class="glyphicon glyphicon-plus"></i>Tambah Data</a></li>
              <!-- <li><a href="#">Contact</a></li> -->
            </ul>
          </div><!--/.nav-collapse -->
      </div>
      </nav>
</body>
