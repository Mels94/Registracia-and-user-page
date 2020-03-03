<?php
session_start();

include_once '../baza/connect.php';



if ($_POST['submit'] && isset($_POST['submit'])){

    if (!empty($_POST['email'] && $_POST['pass'])){
        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
        $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));


        $select = $conn->query("SELECT * FROM `users` WHERE `email` = '$email'");
        $arr = $select->fetchAll(PDO::FETCH_ASSOC);
        $result = password_verify($pass, '$2y$10$'.$arr[0]['password']);

        if ($result){

            $get_name = $arr[0]['name'];
            $get_surname = $arr[0]['surname'];

            header('Location: ../account.php?name='.$get_name.'&surname='.$get_surname);
        }else{
            $_SESSION['user'] = 'Mutqagrel chisht tvyalner';
            header('Location: ../login.php');
        }
    }else{
        header('Location: ../login.php');
    }
}