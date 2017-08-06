<?php
session_start();
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

$login = $_POST['login'];
$pass = $_POST['passwd'];

if (auth($login, $pass) == TRUE)
{
    $_SESSION['login'] = $login;
    $msg = "You logged in succesfully! Welcome";
    echo "<script> alert('$msg');location.href = 'http://localhost:8080/alcornea2/web_store/admin/staff/pages/admin_page.php'; </script>";
}
else {
    # code...
    $msg = "Incorect login or password, try again!";
    echo "<script> alert('$msg');location.href = 'http://localhost:8080/alcornea2/web_store/admin/staff/pages/admin.php?msg=$msg'; </script>";
}
?>
