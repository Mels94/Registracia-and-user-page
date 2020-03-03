<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="card card-outline-secondary">
    <div class="card-header">
        <h3 class="mb-0">Login</h3>
    </div>
    <div class="card-body container">
        <form action="validacia/valid_login.php" method="post" class="form" role="form">
            <div class="form-group">
                <label for="inputName">Email</label>
                <input type="email" class="form-control" name="email" id="inputName" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword3">Password</label>
                <input type="password" class="form-control" name="pass" id="inputPassword3" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success btn-lg float-right" value="Login">
            </div>
            <div class="form-group">
                <a href="index.php">Registration</a>
            </div>
            <span><?php if (isset($_SESSION['user'])){echo $_SESSION['user'];} ?></span>
        </form>
    </div>
</div>

</body>
</html>
<?php
session_unset();
session_destroy();
?>