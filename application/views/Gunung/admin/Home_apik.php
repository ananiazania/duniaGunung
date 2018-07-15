<?php $this->load->view('Gunung/admin/header') ?>
<body>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h1 class="white">

                    </h1>
                </div>
                <div class="col-md-4">

                        <img src="<?= base_url()?>./assets/gambar/user.png" height="250px" width="250px" alt="" srcset="">
                        <br><br>
                        <div>
                                        <a class="nav-link" href="<?= site_url('Admin/TambahUser_admin') ?>">
                                        <button type="button" class="btn btn-success btn-lg">
                                            <i class="fas fa-plus-square"></i> Tambah Data User
                                        </button>
</div>

                </div>
                <div class="col-md-4">

                        <img src="<?= base_url()?>./assets/gambar/mountainAdd.png" height="250px" width="350px" alt="" srcset="">
                        <br> <br>
                        <div class="text-center">
                                        <a class="nav-link" href="<?= site_url('Admin/Tambah_Gunung_admin') ?>">
                                        <button type="button" class="btn btn-success btn-lg" >
                                            <i class="fas fa-plus-square"></i> Tambah Data Gunung
                                        </button>
</div>


                <div class="col-md-2">
                    <h1 class="white">
                    </h1>
                </div>

            </div>
        </div>
    </div>
</body>
