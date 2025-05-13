
<?php
session_start();
if(!isset($_SESSION['login'])) {
    header ("location: login_form.php");
    exit();
} else{
    $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Profile</h2>
    <p>Username: <?php $username ?></p>
    <p>Your are logined!</p>
</body>
</html>