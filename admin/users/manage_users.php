<!-- add, delete, modify
add_delete_admin.php();
-->
<?php require_once('../../shared/initialize.php');?>

<?php include('../headers/admin_header.php'); ?>

<html>
<title>Manage Users</title>
<link rel="stylesheet" media= "all" href ="../style_admin/create_account.css"/>
<body>
  <p> Add, delete or modify a user: </p>
    <form id="board"action="add_delete_admin.php"style="border:2px solid #ccc ;width: 50%" method="post">
  <div class="container" style="padding=40px">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="login" value="" required />
    <label><b>Login</b></label>
    <input type="text" placeholder="Enter Login" name="login" value="" required />
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" value="" required/>
    <input type="submit" class="signupbtn"  name="submit" value="Add Admin"/>
    <input type="submit" class="signupbtn"  name="submit" value="Delete User"/>
    <input type="submit" class="signupbtn"  name="submit" value="Modify User"/>
  </div>
</form>
</body>
</html>


<?php include('../headers/admin_footer.php'); ?>
