<?php
session_start();

$username = "user";
$password = "password";

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("location:loginsuccess.php");
    exit();
}

if(isset($_POST['username']) && isset($_POST['password'])) {
    if($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['loggedin'] = true;
        header("location:loginsuccess.php");
        exit();
    } else {
        echo "Username or password is incorrect";
    }
}
?>

<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <input name="username" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
</body>
</html>