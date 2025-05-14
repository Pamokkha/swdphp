
<?php
session_start();
if(isset($_SESSION['login'])){
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="#" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"> <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"> <br>
        <input type="submit" value="login" >

    </form>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars ($_POST['username']);
    $password = htmlspecialchars ($_POST['password']);

    if ($username == "admin" && $password == "123456") {
        $_SESSION['login'] = true;
        $_SESSION['username']= $username;
        header ("Location: dashboard.php");
    } else{
        echo "Invalid username or password";
    }
}
?>