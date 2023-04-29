<?php
session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$time = $_SESSION['time'];
$class = $_SESSION['class'];
$gender = $_SESSION['gender'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Form</title>
  <style>
    .data {
      border: 1px solid #ddd;
      padding: 10px;
    }
  </style>
</head>

<body>
  <div class="data">
    <div>Your name is: <?= htmlspecialchars($name); ?></div>
    <div>Your email address is: <?= htmlspecialchars($email); ?></div>
    <div>Your class at time is: <?= htmlspecialchars($time); ?></div>
    <div>Your class info: <?= htmlspecialchars($class); ?></div>
    <div>Your gender is: <?= htmlspecialchars($gender); ?></div>
  </div>
</body>

</html>