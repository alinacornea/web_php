<?php
session_start();
$login = $_POST['login'];
$pass = $_POST['passwd'];
function auth($login, $passwd)
{
  $pass =  hash('whirlpool', $passwd);
  $check = unserialize(file_get_contents("private/admins"));
  foreach($check as $value)
  {

    if ($value['login'] === $login && $value['passwd'] === $pass)
      return TRUE;
  }
  return FALSE;
}


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
