
<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}
//theme setup
$theme = isset($_COOKIE["theme"]) ? $_COOKIE["theme"] : "light";
$bg = $theme == "dark" ? "#222" : "#fff";
$color = $theme == "dark" ? "#fff" : "#222";
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
  </head>
  <body style="background-color: <?php echo $bg; ?>; color: <?php echo $color; ?>;">
    
   Welcome to Dashboard, <?php echo $_SESSION['username'];?>!|
    <a href="logout.php">Logout</a> |
    <a href="set_theme.php">Switch Theme</a>
    <!-- logout -->
     <!-- theme switch -->
    <?php
    // multi array
    $students =[
        ["name" => "Augn Aung",  "grade" => 88],
        ["name" => "Aye Aye", "grade" => 87],
        ["name" => "Mu Mu",  "grade" => 86],
        ["name" => "Aung Ko",  "grade" => 85],
    ];
    ?>

    <!-- display table -->
    <table border="1"  cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?=$student['name'] ?></td>
                <td><?=$student['grade'] ?></td>    
            </tr>
            <?php endforeach; ?>
    </table>
  </body>
  </html>