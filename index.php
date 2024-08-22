<!DOCTYPE html>
<html lang="en">

<head>
    <!--  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>AdminLTE 3 | Log in</title> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../asset/adm/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../asset/adm/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../asset/adm/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <!-- <a href="#"><b>Login</b>E-Admin</a> -->
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <?php if (isset($_GET['access'])): ?>
                    <div class="alert alert-danger">MOHON LOGIN TERLEBIH DAHULU</div>
                <?php endif; ?>
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="login.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="user_name" class="form-control" placeholder="user_name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="user_pass" class="form-control" placeholder="user_pass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <div class="col-4">
                            <button type="submit" name="register" class="btn btn-primary btn-block"><a
                                    style="text-decoration: none; color:white;" href="register.php?action=1&id=-99">Register</a></button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>