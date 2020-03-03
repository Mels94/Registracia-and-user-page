<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php if (isset($_SESSION['empty'])): ?>

    <script>
        alert("<?= $_SESSION['empty'] ?>");
    </script>

<?php endif; ?>

<div class="card card-outline-secondary">
    <div class="card-header">
        <h3 class="mb-0">Registration</h3>
    </div>
    <div class="card-body container">
        <form action="validacia/valid_registration.php" method="post" class="form" role="form">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" name="name" id="inputName" placeholder="Full name">
                <?php if (isset($_SESSION['name'])){echo $_SESSION['name'];} ?>
            </div>
            <div class="form-group">
                <label for="inputEmail3">Surname</label>
                <input type="text" class="form-control" name="surname" id="inputEmail3" placeholder="Surname">
                <?php if (isset($_SESSION['surname'])){echo $_SESSION['surname'];} ?>
            </div>
            <div class="form-group">
                <label for="inputEmail3">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                <?php if (isset($_SESSION['email'])){echo $_SESSION['email'];} ?>
            </div>
            <div class="form-group">
                <label for="inputPassword3">Password</label>
                <input type="password" class="form-control" name="pass" id="inputPassword3" placeholder="Password">
                <?php if (isset($_SESSION['pass'])){echo $_SESSION['pass'];} ?>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success btn-lg float-right" value="Register">
            </div>
            <div class="form-group">
                <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
<?php
session_unset();
session_destroy();
?>