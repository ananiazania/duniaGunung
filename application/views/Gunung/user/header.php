<!DOCTYPE html>
<html lang="en">
<head>
<title>Gunung Cantik</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-5/css/fontawesome-all.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>">
</head>
<body >

<!-- navbar -->
<div>
<nav class="navbar navbar-expand-lg sticky-top navbar-light" style="background-color: #8cff66; margin-bottom:30px;">
    <a class="navbar-brand" href="#"><i class="fas fa-badge"></i> Gunung Tertinggi di Indonesian </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <a class="nav-link" href="<?= site_url('User/Home_User') ?>">
             <i class="fas fa-home"></i></i> Home <span class="sr-only">(current)</span>
          </a>
         </li>
            <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('User/Profile_user') ?>">
               <i class="fas fa-users"></i></i> Profil Saya <span class="sr-only">(current)</span>
            </a>
           </li>
          <li class="nav-item active">
          <a class="nav-link" href="<?= site_url('User/Tentang') ?>">
             <i class="fas fa-comments"></i> Tentang <span class="sr-only">(current)</span>
          </a>
         </li>
        </ul>
          <form class="form-inline mt-2 mt-md-0">
            <!-- nama cont/function -->
            
            <a  href="<?= site_url('Admin/Logout_admin') ?>"><i class="fas fa-sign-out-alt"></i></i> Log Out <span class="sr-only">(current)</span></a>
          </form>
    </div>
  </nav>
</div>
<!-- Home content
<div>
    <div class="col-lg-6">
        <div class="description">
            <h2 class="h2-responsive wow fadeInLeft">Selamat datang di Sistem Biodata Codeigniter </h2>
            <hr class="hr-light wow fadeInLeft">
            <p class="wow fadeInLeft" data-wow-delay="0.4s">ini merupakan halaman home dari website sistem biodata Siti kholifah. website ini di buat untuk memenuhi Tugas minggu ke 2 mata kuliah Pemograman Web Berbasis Framework menggunakan Codeigniter. Terima kasih.</p>
        </div>
    </div>
</div> -->

  <script type="text/javascript" src="<?= base_url('ass/js/jquery-3.2.1.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('ass/js/tether.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('ass/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('ass/js/mdb.min.js') ?>"></script>

</body>
</html>
