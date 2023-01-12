<?php
include "include/db.php";
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $log_type = "login";
    $date_log = date('Y-m-d H:i:m');

    $query = $db->query("SELECT * FROM tb_users WHERE username='$user' AND date_birthday='$pass'");
    if (mysqli_num_rows($query) == 1) {
        session_start();
        $_SESSION['username'] = $user;
        header("Location: ./index.php?SignInsuccess=true");
    } else {
        header("Location: ./login.php?SignInfailed=true");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Kuehne+Nagel Indonesia - BDG Gathering</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/apps/icon/icon.png" />
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
    <!-- Font Poppins -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- FONTAWESON 5 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/solid.css" integrity="sha384-DhmF1FmzR9+RBLmbsAts3Sp+i6cZMWQwNTRsew7pO/e4gvzqmzcpAzhDIwllPonQ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/fontawesome.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous" />
    <!-- Add the v6 core styles and then select the individual styles you need, like Solid and Brands -->
    <link href="node_modules/@fortawesome/fontawesome-free/css/fontawesome.css" rel="stylesheet" />
    <link href="node_modules/@fortawesome/fontawesome-free/css/brands.css" rel="stylesheet" />
    <link href="node_modules/@fortawesome/fontawesome-free/css/solid.css" rel="stylesheet" />
    <!-- support v4 icon references/syntax -->
    <link href="node_modules/@fortawesome/fontawesome-free/css/v4-font-face.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/sweet/sweetalert2.css">
    <script src="assets/sweet/sweetalert2.all.js"></script>
    <script src="assets/sweet/sweetalert2.all.min.js"></script>
    <script src="assets/sweet/sweetalert2.js"></script>
    <script src="assets/sweet/sweetalert2.min.js"></script>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="" method="POST">
                    <span class="login100-form-title">
                        <div style="display: grid;justify-content: center;align-items: center;margin-bottom: -45px;margin-top: -45px;">
                            <center>
                                <img src="assets/apps/logo/kn-w.png" alt="IMG" style="width: 200px;">
                            </center>
                            <hr>
                            <img src="assets/apps/outing.png" alt="IMG" style="width: 300px;">
                        </div>
                    </span>
                    <!-- Username -->
                    <div class="wrap-input100 validate-input" data-validate="firstname.lastname (namadepan.namabelakang)">
                        <input class="input100" type="text" name="username" placeholder="firstname.lastname">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div style="margin-top: -15px;">
                        <center>
                            <small style="color:#fff;font-size:10px"><i>Bahasa: Masukkan namadepan.namabelakang</i></small>
                        </center>
                    </div>
                    <!-- Password -->
                    <div class="wrap-input100 validate-input" data-validate="Date of birth (ddmmyyyy)">
                        <input class="input100" type="password" name="password" id="password" placeholder="Date of birth (ddmmyyyy)">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div style="margin-top: -15px;">
                        <center>
                            <small style="color:#fff;font-size:10px"><i>Bahasa: Tanggal Lahir (hhbbtttt) Ex:31121990</i></small>
                        </center>
                    </div>
                    <div class="form-group" style="margin-left: 10px;">
                        <div class="checkbox checkbox-css">
                            <input type="checkbox" id="ckb1" onclick="myFunction()" />
                            <label for="ckb1" style="color: #fff;">Show password</label>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="submit">
                            Login
                        </button>
                    </div>
                    <hr>
                    <center>
                        <div style="display: grid;justify-content: center;align-items: center;margin-bottom: -40px;">
                            <div>
                                <font style="font-size: 10px;font-weight: 900;color: #fff;">Kuehne+Nagel Indonesia Bandung Gathering</font>
                            </div>
                            <div>
                                <font style="font-size: 14px;font-weight: 900;color: #fff;">14-15 January 2023</font>
                            </div>
                            <hr>
                            <div style="font-size: 10px;color: #fff;">
                                <i class="fas fa-hotel"></i> <i>Sheraton Bandung Hotel & Towers</i>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/login/vendor/select2/select2.min.js"></script>
    <script src="assets/login/vendor/tilt/tilt.jquery.min.js"></script>
    <script type="text/javascript">
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="assets/login/js/main.js"></script>
    <script type="text/javascript">
        // SIGN IN SUCCESS
        if (window?.location?.href?.indexOf('SignInfailed') > -1) {
            Swal.fire({
                title: 'Login Failed!',
                icon: 'error',
                html: 'Your data not found!<br><i>Bahasa: Data anda tidak ditemukan!</i>'
            })
            history.replaceState({}, '', './login.php');
        }
        // LOGOUT
        if (window?.location?.href?.indexOf('Logout') > -1) {
            Swal.fire({
                title: 'Logout!',
                icon: 'info',
                html: 'Logout successful!<br><i>Bahasa: Logout berhasil!</i>'
            })
            history.replaceState({}, '', './login.php');
        }
    </script>
    <!-- Show Password -->
    <script type="text/javascript">
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>