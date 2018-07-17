<?php $this->load->view('Gunung/Admin/header_all_admin') ?>
<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="white">
                        Hallo Admin <br>
                        Apakah Ada data gunung baru di indonesia? :)
                    </h1>
                </div>
                <div class="col-md-6 justify-content-md-center">
                    <form action="<?php echo base_url('index.php/Admin/CekDB') ?>" method="post">
                        <div class="form-group">
                            <label class="white" for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="username" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label class="white" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="password" aria-describedby="helpId">
                        </div>
                        <button type="submit" name="btn" id="" class="btn btn-success btn-lg btn-block">Login</button>
                        <br> Sudah punya akun? Silahkan Daftar <br><br>
                        <a href="<?= site_url('User/Daftar') ?>"button type="" name="btn" id="" class="btn btn-info btn-lg btn-block"> Sign Up </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
