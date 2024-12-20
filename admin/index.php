<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'gov-car');
// Check if the user is already logged in
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header('Location: ./dashboard.php');
    exit(); // Stop further script execution
}
$errorMessage = ''; // Variable to store error messages

if (isset($_POST['login']) && $_POST['login'] == 'type') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE Email='$email' AND Password='$password'");
    $row = mysqli_fetch_assoc($query);
    $num = mysqli_num_rows($query);

    if ($num > 0) 
    {
        session_start();
       $_SESSION['id'] = $row['id'];        
        if ($row['type'] == 'admin') {
            header('Location: ./dashboard.php');
            exit();
        } else {
            $errorMessage = 'Error! You are not authorized to access the admin panel.';
        }
    } else {
        $errorMessage = 'Invalid email or password. Please try again.';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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

                <!-- Display Bootstrap Alert -->
                <?php if (!empty($errorMessage)) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $errorMessage; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <form action="index.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <input type="hidden" name="login" value="type">
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
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign In &nbsp;<i
                                class="fa fa-lock"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="./plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
