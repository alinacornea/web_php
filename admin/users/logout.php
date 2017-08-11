<?php
session_start();
if ($_SESSION['login'])
{
    session_destroy();
    $msg = "$_SESSION[login]".", you are logged out succesfuly!";
    echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/public/index.php'; </script>";
    exit();
}
else {
  $msg = "You need to log in first!";
  echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/public/index.php'; </script>";
}
?>
