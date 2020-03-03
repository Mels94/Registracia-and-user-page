<?php
session_start();

include_once '../baza/connect.php';


if ($_POST['submit'] && isset($_POST['submit'])){

    if (!empty($_POST['name'] && $_POST['surname'] && $_POST['email'] && $_POST['pass'])){
        $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
        $surname = trim(filter_var($_POST['surname'], FILTER_SANITIZE_STRING));
        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
        $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));
        $err = 0;
        if (strlen($name) < 2 || strlen($name) > 15){
            $_SESSION['name'] = 'Anun@ sxal e';
            $err = 1;
            header('Location: ../index.php');
        }
        if (strlen($surname) < 3 || strlen($surname) > 15){
            $_SESSION['surname'] = 'Azganun@ sxal e';
            $err = 1;
            header('Location: ../index.php');
        }
        if (strlen($email) < 7 || strlen($email) > 30){
            $_SESSION['email'] = 'Email@ sxal e';
            $err = 1;
            header('Location: ../index.php');
        }
        if (strlen($pass) < 3 || strlen($pass) > 15){
            $_SESSION['pass'] = 'Parol@ sxal e';
            $err = 1;
            header('Location: ../index.php');
        }

        if ($err == 0){

            $hash = password_hash($pass, PASSWORD_BCRYPT);
            $pass = str_replace('$2y$10$', '', $hash);

            $sql = $conn->prepare("INSERT INTO `users` (`name`, `surname`, `email`, `password`) VALUES
                ('$name', '$surname', '$email', '$pass')");

            $user = $sql->execute();
            header('Location: ../login.php');
        }
    }else{
        $_SESSION['empty'] = 'Datark e';
        header('Location: ../index.php');
    }
}




