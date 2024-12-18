<?php
$conn=mysqli_connect('localhost','root','','gov-car');

if(isset($_POST['login']) && $_POST['login']=='admintype')
{
    
$email=$_POST['email'];
$password=$_POST['password'];
// echo $email;exit;
$query=mysqli_query($conn,"select * from user where Email='$email' AND Password='$password'");
$num=mysqli_num_rows($query);


if($num > 0)
{
   $row=mysqli_fetch_assoc($query);
   if($row['type']=='admin')
   {
      header('Location:./dashboard.php');
   }
   else
   {
    echo 'error';
   }

}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="./index2.html" class="h1"><b>Admin</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="index.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <input class="orm-control" type="hidden" name="login" value="admintype" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign In &nbsp; <i
                                class="fa fa-lock"></i></button>
                        <!-- /.col -->
                        <!-- <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div> -->
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center mt-2 mb-3">
          <button type="submit" class="btn btn-primary btn-block">Sign In &nbsp; <i class="fa fa-lock"></i></button> -->

            </div>
            <!-- /.social-auth-links -->

            <!-- <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Register a new membership</a>
        </p> -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
</body>

</html>