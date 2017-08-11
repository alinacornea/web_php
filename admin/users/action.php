<?php
session_start();
require_once('../../shared/initialize.php');
$login = $_POST['login'];
$_SESSION['login'] = $login;
$pass = $_POST['passwd'];
$email = $_POST['email'];

if ($_POST['submit'] === "Sign Up")
{
		$hash = hash('whirlpool', $pass);
		if (!file_exists("private"))
		{
      mkdir("private", 0777, true);
      $unserialize = array(array('email'=>$email, 'login'=>$login, 'passwd'=>$hash));
    }
    else
    {
      $check = file_get_contents("private/passwd");
      $unserialize = unserialize($check);
      foreach($unserialize as $value)
      {
        if ($value['login'] == $login || $value['email'] == $email)
        {
          $msg = "This user already exists, please enter a different user!";
          echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/admin/users/create_account.php?msg=$msg'; </script>";
          return ;
        }
      }
      $unserialize[] = array('email'=> $email, 'login'=>$login, 'passwd'=>$hash);
    }
    $convert = serialize($unserialize);
    file_put_contents("private/passwd", $convert);
    $msg = "Your login and password was created!";
    echo "<script> alert('$msg'); location.href = 'http://localhost:8080/ecommerce/public/index.php?msg=$msg'; </script>";
    die();
}
  else {
    $msg = "Submit your login and password!";
    echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/admin/users/create_account.php?msg=$msg'; </script>";
  }
?>
