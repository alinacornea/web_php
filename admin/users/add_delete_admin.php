<?php
session_start();
require_once('../../shared/initialize.php');
$login = $_POST['login'];
$pass = $_POST['passwd'];

$_SESSION['login'] = $login;
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
          echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/admin/users/manage_users.php'; </script>";
          return ;
        }
      }
      $unserialize[] = array('login'=>$login, 'passwd'=>$hash);
    }
    $convert = serialize($unserialize);
    file_put_contents("private/admins", $convert);
    $msg = $login.", you are now an admin!";
    echo "<script> alert('$msg'); location.href='http://localhost:8080/ecommerce/admin/users/admin_page.php'; </script>";
}
else if ($_POST['submit'] === "Delete")
{
	$did = false;
	$hash = hash('whirlpool', $pass);
	$check = unserialize(file_get_contents("private/passwd"));
	$i = 0;
	foreach($check as $value)
	{
		if ($value['login'] === $login && $value['passwd'] === $hash)
		{
				unset($check[$i]['email']);
				unset($check[$i]['login']);
				unset($check[$i]['passwd']);
				$did = true;
				break ;
		}
		$i++;
	}
	if ($did == true)
	{
		$convert = serialize($check);
		file_put_contents("private/passwd", $convert);
		$msg = "This user was deleted!";
		echo "<script> alert('$msg'); location.href='http://localhost:8080/ecommerce/admin/users/admin_page.php'; </script>";
	}
	else {
		# code...
		$msg = "Wrong login or password";
		echo "<script> alert('$msg'); location.href='http://localhost:8080/ecommerce/admin/users/manage_users.php'; </script>";
	}
}
?>
