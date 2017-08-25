<?php  session_start(); ?>

<?php
require_once('../../shared/initialize.php');
include('../headers/header.php');

if (isset($_SESSION['login']))
{
  $msg =  "You already logged in as ".$_SESSION['login'] ;
  echo "<script> alert('$msg');window.open('../../public/index.php?login=$login', '_self'); </script>";
  die();
}

if (isset($_POST['login']))
{
  $login = $_POST['login'];
  $pass = $_POST['passwd'];

  function auth($login, $pass)
  {
    global $conn;
    $passwd =  hash('whirlpool', $pass);
    $get_cat = "select * from Users where login='{$login}' and hash='{$passwd}'";
    $check = mysqli_query($conn, $get_cat);
    if (!$check) {
      die('Invalid query: ' . mysqli_error($conn));
  }
    while ($f = mysqli_fetch_array($check))
    {
      if ($f['login'] === $login && $f['hash'] === $passwd){
        return TRUE;}
    }
    return FALSE;
  }

  if (auth($login, $pass) == TRUE)
  {
      $_SESSION['login'] = $login;
      echo "<script>alert('$login, You logged in succesfully! Welcome')</script>";
      echo "<script>window.open('../../public/index.php', '_self')</script>";
  }
  else
  {
      // $_SESSION['login'] = "";
      echo "<script>alert('$login, Incorect login or password, try again!')</script>";
      echo "<script>window.open('login.php', '_self')</script>";
  }
}
?>
  <html>
  <title>Log in </title>
  <link rel="stylesheet" media= "all" href = "../style_admin/login1.css"/>
  <body>
  <div class="content">
  <form action = "" method="post">
    <input type= "login" name="login" placeholder = "LOGIN" value="<?php echo $_SESSION['login']; ?>" />
    <br />
    <input type = "password" name="passwd" placeholder= "PASSWORD" value="<?php echo $_SESSION['passwd'];?>" />
    <br />
    <input type="submit" name="submit" value="SUBMIT" />
    <br />
    <p> <a href="create_account.php"> Are you new? Create an account here</a> </p>
  </form>
</div>
</body>
</html>

<?php include('../headers/footer.php'); ?>
