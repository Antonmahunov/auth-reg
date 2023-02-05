<?php
session_start();
require_once 'connect.php';
$firstname = $_POST['firstname'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$passwordConfirmation = $_POST['password_confirmation'];

if($password == $passwordConfirmation) {
    $path = 'uploads/' .time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../'.$path)){
        $_SESSION['message'] = "Error when uploading file";
        header('Location:../registration.php');
    }
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `user` (`id`, `firstname`, `surname`, `email`, `username`, `password`, `avatar`) 
VALUES (NULL, '$firstname', '$surname', '$email', '$username', '$password', '$path')");
    $_SESSION['message'] = "Account successfully created";
    header('Location:../index.php');
} else {
    $_SESSION['message'] = "Passwords doesn't match";
    header('Location:../registration.php');
};


?>