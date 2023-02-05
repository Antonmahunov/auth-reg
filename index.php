<?php
session_start();

if (isset($_SESSION['user'])){
    header('Location: profile.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorization</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<form action="vendor/signin.php" method="post">
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter your username" required>
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter your password" required>
    <button type="submit">Enter</button>
    <p>Don't have an account?
        <a href="registration.php">Registration</a>
    </p>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="msg"> '. $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
<!-- Authorization form -->
</body>
</html>