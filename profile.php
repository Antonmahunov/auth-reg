<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My profile</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="">
    <h2><?= $_SESSION['user']['firstname'] ?></h2>
    <h2><?= $_SESSION['user']['surname'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="vendor/logout.php" class="logout">Logout</a>
</form>
</body>
