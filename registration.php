<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <div>
        <label>Firstname</label>
        <div>
            <input type="text" name="firstname" placeholder="Enter your first name" />

        </div>
    </div>
    <div>
        <label>Surname</label>
        <div>
            <input type="text" name="surname" placeholder="Enter your  surname" />
        </div>
    </div>
    <div>
        <label>Create avatar</label>
        <div>
            <input type="file" name="avatar" />
        </div>
    </div>
    <div>
        <div>

    <label>Email</label>
    <input type="email" name="email" placeholder="Enter your email">
        </div>
    </div>
    <div>
        <label>Username</label>
        <div>
            <input type="text" name="username" placeholder="Enter your username" />
        </div>
    </div>

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter your password">
    <label>Confirm password</label>
    <input type="password" name="password_confirmation" placeholder="Confirm your password">
    <button>Create account</button>
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
<!-- Registration form -->
</body>
</html>