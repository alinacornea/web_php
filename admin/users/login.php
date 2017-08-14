<?php  session_start(); ?>

<?php
require_once('../../shared/initialize.php');
include('../headers/header.php');

if (isset($_SESSION['login']))
{
  $msg =  "You already logged in as ".$_SESSION['login'] ;
  echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/public/index.php?login=$login'; </script>";
  die();
}

if (isset($_POST['login']))
{
  $login = $_POST['login'];
  $pass = $_POST['passwd'];

  function auth($login, $passwd)
  {
    $pass =  hash('whirlpool', $passwd);
    $check = unserialize(file_get_contents("private/passwd"));
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
      $msg = "$login".", you logged in succesfully! Welcome";
      echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/public/index.php?login=$login'; </script>";
  }
  else
  {
      // $_SESSION['login'] = "";
      $msg = "Incorect login or password, try again!";
      echo "<script> alert('$msg');location.href = 'http://localhost:8080/ecommerce/admin/users/login.php'; </script>";
  }
}
?>
  <html>
  <title>Log in </title>
  <link rel="stylesheet" media= "all" href = "../style_admin/login.css"/>
  <body>
  <div id="content">
  <form action = "" method="post">
    <input type= "login" name="login" placeholder = "LOGIN" value="<?php echo $_SESSION['login']; ?>" />
    <br />
    <input type = "password" name="passwd" placeholder= "PASSWORD" value="<?php echo $_SESSION['passwd'];?>" />
    <br />
    <input type="submit" name="submit" value="SUBMIT" />
    <br />
      <li> <a href="/ecommerce/admin/users/create_account.php"><b style="font-size:23px;color:blue;background-color:white;"> Are you new? Create an account here</b></a> </li>
  </form>
</div>
</body>
</html>

<?php include('../headers/footer.php'); ?>
