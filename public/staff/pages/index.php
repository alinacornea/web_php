<?php require_once('../../../admin/initialize.php'); ?>

<?php include('../../../admin/shared/header.php'); ?>

<html>
<title>Log in </title>
<link rel="stylesheet" media= "all" href = "<?php echo url_for('/stylesheets/login.css'); ?>"/>
<body>
  <div id="content">
  <form action = "login.php" method="post">
    <input type= "login" name="login" value="<?php echo $_SESSION['login']; ?>" />
    <br />
    <input type = "password" name="passwd" value="<?php echo $_SESSION['passwd'];?>" />
    <br />
    <input type="submit" name="submit" value="SUBMIT" />
    <br />
      <li> <a href="/web_store/admin/staff/pages/create_account.php"> Are you new? Create an account here</a> </li>
  </form>
</div>
</body>
</html>

<?php include('../../../admin/shared/footer.php'); ?>
