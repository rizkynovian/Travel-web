<!DOCTYPE html>
<html lang="en">

<head>

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <style>
        .background {
            background-image: url(img/background.jpg);
        }
    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img-body">
    <div class="container"><span class="background">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
            ?>
                    <script>
                        alert("Login Gagal! Username dan Password salah!");
                    </script>
                <?php } else if ($_GET['pesan'] == "logout") { ?>
                    <script>
                        alert("Anda berhasil logut!");
                    </script>
                <?php } else if ($_GET['pesan'] == "belum_login") { ?>
                    <script>
                        alert("Anda harus login untuk mengakses halaman tersebut!");
                    </script>
            <?php }
            }
            ?>
            <form class="login-form" method="POST" action="ceklogin.php">
                <div class="login-wrap">
                    <p class="login-img"><i class="icon_lock_alt"></i></p>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_profile"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div> <br>
                    <button class="btn btn-danger btn-lg btn-block" type="submit" value="login">Login</button>
                </div>
            </form>
        </span>
    </div>

</body>

</html>