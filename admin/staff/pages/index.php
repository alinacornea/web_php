<?php require_once('../../initialize.php'); ?>

<?php include('../../shared/header.php'); ?>

<?php
session_start();
if (isset($_SESSION['loggedin']))
{
  $msg = "You already logged in";
  echo "<script> alert('$msg');location.href = 'http://localhost:8080/alcornea2/web_store/admin/staff/index.php'; </script>";
  die();
}
?>
  <html>
  <title>Log in </title>
  <link rel="stylesheet" media= "all" href = "<?php echo url_from_public("public/stylesheets/login.css");?>"/>
  <body>
  <div id="content">
  <form action = "login.php" method="post">
    <input type= "login" name="login" placeholder = "LOGIN" value="<?php echo $_SESSION['login']; ?>" />
    <br />
    <input type = "password" name="passwd" placeholder= "PASSWORD" value="<?php echo $_SESSION['passwd'];?>" />
    <br />
    <input type="submit" name="submit" value="SUBMIT" />
    <br />
      <li> <a href="/alcornea2/web_store/admin/staff/pages/create_account.php"> Are you new? Create an account here</a> </li>
  </form>
</div>
</body>
</html>

<?php include('../../shared/footer.php'); ?>
