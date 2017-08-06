<?php
session_start();
require_once('../../initialize.php');
$login = $_POST['login'];
$pass = $_POST['passwd'];

if ($_POST['submit'] === "Add")
{
		$hash = hash('whirlpool', $pass);
		if (!file_exists("private/"))
		{
      mkdir("private", 0777, true);
      $unserialize = array(array('login'=>$login, 'passwd'=>$hash));
    }
    else
    {
      $check = file_get_contents("private/admins");
      $unserialize = unserialize($check);
      foreach($unserialize as $value)
      {
        if ($value['login'] == $login)
        {
          $msg = "This admin already exists";
          echo "<script> alert('$msg');location.href = 'http://localhost:8080/alcornea2/web_store/admin/staff/pages/manage_users.php'; </script>";
          return ;
        }
      }
      $unserialize[] = array('login'=>$login, 'passwd'=>$hash);
    }
    $convert = serialize($unserialize);
    file_put_contents("private/admins", $convert);
    $msg = "You are now an admin!";
    echo "<script> alert('$msg'); location.href='http://localhost:8080/alcornea2/web_store/admin/staff/pages/admin_page.php'; </script>";
}
?>
