<!-- 
 -html
 -welcome, dashboard
 -create multi array
 -display with table
  -->
<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
  </head>
  <body>
    <h1>Welcome,dashboard</h1>
    <!-- logout -->
     <!-- theme switch -->
    <?php
    $students =[
        ["name" => "Augn Aung",  "grade" => 88],
        ["name" => "Aye Aye", "grade" => 87],
        ["name" => "Mu Mu",  "grade" => 86],
        ["name" => "Aung Ko",  "grade" => 85],
    ];

    ?>
    <table border="1" cellpadding="5">
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