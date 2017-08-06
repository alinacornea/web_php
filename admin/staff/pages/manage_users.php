<?php require_once('../../initialize.php'); ?>

<?php include('../../shared/header.php'); ?>

<html>
<title>Manage Users</title>
<link rel="stylesheet" media= "all" href ="<?php echo url_from_public("public/stylesheets/create_account.css") ; ?> "/>
<body>
  <h2> Add user admin: </h2>
    <form action="add_admin.php"style="border:2px solid #ccc ;width: 50%" method="post">
  <div class="container" style="padding=40px">
    <label><b>Login</b></label>
    <input type="text" placeholder="Enter Login" name="login" value="" required />
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" value="" required/>
    <input type="submit" class="signupbtn"  name="submit" value="Add"/>
  </div>
</form>
</body>
</html>


<?php include('../../shared/footer.php'); ?>
