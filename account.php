
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

<?php
$name = $_GET['name'];
$surname = $_GET['surname'];

?>

<div class="container">
    <h1>Hello <?= $name; ?></h1>
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <img src="https://www.ibts.org/wp-content/uploads/2017/08/iStock-476085198.jpg"
                 alt="image" style="width: 250px" />
        </div>
        <div class="col-sm-9 col-md-9">
                <p><?= $name; ?></p>
                <p><?= $surname; ?></p>
        </div>
    </div>
</div>



</body>
</html>





