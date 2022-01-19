<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Siswa</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url()?>/template/node_modules/selectric/public/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url()?>/template/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>/template/assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-6">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand">
                            <img src="<?= base_url()?>/template/assets/img/logo.png" alt="logo" width="150"
                                class="shadow-light rounded-circle">
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <form action="<?= base_url('admin/Siswa/registrasi')?>" method="POST">
                                    <?= csrf_field()?>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" name="NIK" autofocus>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">Nama Siswa</label>
                                            <input id="last_name" type="text" class="form-control" name="nm_siswa">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="first_name">Username</label>
                                            <input id="first_name" type="text" class="form-control" name="username"
                                                autofocus>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="last_name">Password</label>
                                            <input id="last_name" type="text" class="form-control" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                    <div class="mt-5 text-muted text-center">
                                        Sudah punya akun? <a href="<?= site_url('login')?>">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; Stisla 2018
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url()?>/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url()?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url()?>/template/assets/js/stisla.js"></script>


    <!-- JS Libraies -->
    <script src="<?= base_url()?>/template/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="<?= base_url()?>/template/node_modules/selectric/public/jquery.selectric.min.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url()?>/template/assets/js/scripts.js"></script>
    <script src="<?= base_url()?>/template/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url()?>/template/assets/js/page/auth-register.js"></script>
</body>

</html>