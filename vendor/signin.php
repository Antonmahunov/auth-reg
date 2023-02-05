<?php
session_start();
require_once 'connect.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$checkUser = mysqli_query($connect, "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'");
echo mysqli_num_rows($checkUser);
if (mysqli_num_rows($checkUser) > 0) {
    $user = mysqli_fetch_assoc($checkUser);
    $_SESSION['user'] = [
        'id'=> $user['id'],
        'firstname'=>$user['firstname'],
        'surname'=>$user['surname'],
        'avatar'=>$user['avatar'],
        'email'=>$user['email']
    ];
    header('Location: ../profile.php');
} else {
    $_SESSION['message'] = 'Incorrect username or password';
    header('Location: ../index.php');
}
?>
<pre>
    <?php
    print_r($checkUser);
    print_r($user);
    ?>
</pre>
