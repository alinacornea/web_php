<?php
include ("../../shared/initialize.php");
session_start();
$login = $_POST['login'];
$pass = $_POST['passwd'];

function auth($login, $pass)
{
  global $conn;
  $passwd =  hash('whirlpool', $pass);
  $get_cat = "select * from Admins where login='{$login}' and hash='{$passwd}'";
  $check = mysqli_query($conn, $get_cat);
  // print_r($check);

  if (!$check) {
  	echo "Error: " . $check . "<br>" . mysqli_error($conn);
}
  while ($f = mysqli_fetch_array($check))
  {
    print_r($f);
    if ($f['login'] === $login && $f['hash'] === $passwd){
      return TRUE;}
  }
  return FALSE;
}
auth($login, $pass);
if (auth($login, $pass) === TRUE)
{
    $_SESSION['login'] = $login;
    echo "<script>alert('$login, You logged in succesfully! Welcome')</script>";
    echo "<script>window.open('../index.php?login=$login', '_self')</script>";
}
else {
    # code...
    echo "<script>alert('$login, Incorect login or password, try again!')</script>";
    echo "<script>window.open('admin_login.php', '_self')</script>";
}
?>
