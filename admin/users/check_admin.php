<?php
include ("../../shared/initialize.php");
session_start();
$login = $_POST['login'];
$pass = $_POST['passwd'];
function auth($login, $passwd)
{
  $passwd =  hash('whirlpool', $pass);
  $get_cat = "select * from Users where login='{$login}' and hash='{$passwd}'";
  print_r($get_cat);
  if (mysqli_query($conn, $get_cat) === TRUE){
    return TRUE;}
  else {
    return FALSE;
  }
}

auth($login, $pass);
if (auth($login, $pass) == TRUE)
{
    $_SESSION['login'] = $login;
    $msg = "You logged in succesfully! Welcome";
    echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/admin/index.php?login=$login'; </script>";
}
else {
    # code...
    $msg = "Incorect login or password, try again!";
    echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/admin/users/admin_login.php?msg=$msg'; </script>";
}
?>
