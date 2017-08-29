<?php
session_start();
if ($_SESSION['login'])
{
    session_destroy();
    $msg = "$_SESSION[login]".", you are logged out succesfuly!";
    echo "<script> alert('$msg');window.open('../../public/index.php?login=$login', '_self'); </script>";
    exit();
}
else {
  $msg = "You need to log in first!";
  echo "<script>alert('$msg');window.open('login.php', '_self')</script>";
}
?>
