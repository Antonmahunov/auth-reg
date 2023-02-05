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
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="firstname">Firstname</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required />
    </div>
    <div>
        <label for="surname">Surname</label>
        <input type="text" id="surname" name="surname" placeholder="Enter your surname" required />
    </div>
    <div>
        <label for="avatar">Create avatar</label>
        <input type="file" id="avatar" name="avatar" required />
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required />
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required />
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required />
    </div>
    <div>
        <label for="password_confirmation">Confirm password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required />
    </div>
    <button type="submit">Create account</button>
    <p>Already have account?
        <a href="index.php">Authorization</a>
    </p>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>
