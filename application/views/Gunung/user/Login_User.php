<?php $this->load->view('Gunung/Admin/header_all_admin') ?>
<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="white">
                        Hallo !!! <br>
                        Selamat Datang di Web Dunia Gunung :)
                    </h1>
                </div>
                <div class="col-md-6 justify-content-md-center">
                    <form action="<?php echo base_url('index.php/User/Login') ?>" method="post">

                        <div class="form-group">
                            <label class="white" for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="username" aria-describedby="helpId">
                              <?php echo form_error('username'); ?>
                        </div>
                        <div class="form-group">
                            <label class="white" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="password" aria-describedby="helpId">
                              <?php echo form_error('password'); ?>
                        </div>

                        <button type="submit" name="btn" id="" class="btn btn-success btn-lg btn-block">Login</button>
                        <button type="" name="btn" id="" class="btn btn-info btn-lg btn-block">
                           Sign Up </button> </a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
