<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $theme = $_POST["theme"];
    setcookie("theme", $theme, time() + (86400*30), "/");
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Theme</title>
</head>
<body>
    <form action="#" method="post">
    <label for="theme">Switch Theme</label>
    <select name="theme" id="theme">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
    </select>
    <input type="Submit" name="" id="" value="save theme">
</form>
</body>
</html>
