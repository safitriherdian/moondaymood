<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="user/assets-login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="user/assets-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="user/assets-login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="user/assets-login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="user/assets-login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="user/assets-login/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="user/assets-login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="user/assets-login/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="user/assets-login/css/util.css">
    <link rel="stylesheet" type="text/css" href="user/assets-login/css/main.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(user/assets-login/images/bg.jpg);">
                    <span class="login100-form-title-1">
                        Daftar Pelanggan
                    </span>
                </div>

                <form class="login100-form validate-form" method="post">
                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Nama</span>
                        <input type="text" class="form-control" name="nama" required>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18">
                        <span class="label-input100">Email</span>
                        <input type="email" class="form-control" name="email" required>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18">
                        <span class="label-input100">Password</span>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18">
                        <span class="label-input100">Alamat</span>
                        <textarea name="alamat" id="" cols="30" rows="4" class="form-control" required></textarea>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18">
                        <span class="label-input100">Telepon</span>
                        <input type="text" class="form-control" name="telepon" required>
                    </div>
                    <div class="container">
                        <button class="btn btn-primary float-right" title="Daftar sekarang juga!" name="daftar">Daftar</button>
                        <a href="login.php" class="btn btn-danger float-right" title="Klik Login, jika punya akun">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="user/assets-login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="user/assets-login/vendor/animsition/js/animsition.min.js"></script>
    <script src="user/assets-login/vendor/bootstrap/js/popper.js"></script>
    <script src="user/assets-login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="user/assets-login/vendor/select2/select2.min.js"></script>
    <script src="user/assets-login/vendor/daterangepicker/moment.min.js"></script>
    <script src="user/assets-login/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="user/assets-login/vendor/countdowntime/countdowntime.js"></script>
    <script src="user/assets-login/js/main.js"></script>

</body>

</html>