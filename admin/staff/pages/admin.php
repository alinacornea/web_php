<?php require_once('../../initialize.php'); ?>

<?php include('../../shared/header.php'); ?>

<html>
<title>Log in </title>
<link rel="stylesheet" media= "all" href = "<?php echo url_from_public("public/stylesheets/login.css") ; ?> "/>
<body>
  <div id="content">
  <p1>Admin account: </p1> <br/>
  <form action = "check_admin.php" method="post">
    <input type= "login" name="login" placeholder = "LOGIN" value="<?php echo $_SESSION['login']; ?>" />
    <br />
    <input type = "password" name="passwd" placeholder= "PASSWORD" value="<?php echo $_SESSION['passwd'];?>" />
    <br />
    <input type="submit" name="submit" value="SUBMIT" />
    <br />
  </form>
</div>
</body>
</html>

<?php include('../../shared/footer.php'); ?>
