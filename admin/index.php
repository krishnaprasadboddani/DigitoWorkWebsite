<?php
session_start();
include('dbcon.php');
if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $chk = "select * from admin where username='$username' and password='$password' ";
    $rs = mysqli_query($con, $chk);
    $count = mysqli_num_rows($rs);
    if ($count < 1) {
?>
        <script>
            alert('username and password not match!!..');
            window.open('index.php', '_self');
        </script>
<?php
    } else {
        $data = mysqli_fetch_assoc($rs);
        $id = $data['id'];
        $_SESSION['uid'] = $id;
        header('location:dashboard.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>admin | Digitohub</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../images/logo1.jpeg">
    <link rel="icon" type="image/png" href="../images/logo1.jpeg" sizes="32x32">
    <link rel="icon" type="image/png" href="../images/logo1.jpeg" sizes="16x16">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/vendors/line-awesome/css/line-awesome.min.css" rel="stylesheet" />
    <link href="assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendors/toastr/toastr.min.css" rel="stylesheet" />
    <link href="assets/vendors/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('assets/img/blog/main.jpg');
        }

        .cover {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(117, 54, 230, .1);
        }

        .login-content {
            max-width: 400px;
            margin: 100px auto 50px;
        }

        .auth-head-icon {
            position: relative;
            height: 60px;
            width: 60px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            background-color: #fff;
            color: #5c6bc0;
            box-shadow: 0 5px 20px #d6dee4;
            border-radius: 50%;
            transform: translateY(-50%);
            z-index: 2;
        }
    </style>
</head>

<body>
    <div class="cover"></div>
    <div class="ibox login-content">
        <div class="text-center">
            <span class="auth-head-icon"><a href="../index.php"><i class="la la-user"></i></a></span>
        </div>
        <form class="ibox-body" action="" method="post">
            <h4 class="font-strong text-center mb-5">LOG IN</h4>
            <div class="form-group mb-4">
                <input class="form-control form-control-line" type="text" name="uname" placeholder="Username">
            </div>
            <div class="form-group mb-4">
                <input class="form-control form-control-line" type="password" name="pass" placeholder="Password">
            </div>
            <div class="flexbox mb-5">
                <span>
                    <label class="ui-switch switch-icon mr-2 mb-0">
                        <input type="checkbox" checked="">
                        <span></span>
                    </label>Remember</span>
                <a class="text-primary" href="#">Forgot password?</a>
            </div>
            <div class="text-center mb-4">
                <input type="submit" name="login" value="LOGIN" class="btn btn-primary btn-rounded btn-block">
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- CORE PLUGINS-->
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendors/metisMenu/dist/metisMenu.min.js"></script>
    <script src="assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/vendors/jquery-idletimer/dist/idle-timer.min.js"></script>
    <script src="assets/vendors/toastr/toastr.min.js"></script>
    <script src="assets/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="assets/vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>