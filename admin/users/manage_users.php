<!-- add, delete, modify
add_delete_admin.php();
-->
<?php require_once('../../shared/initialize.php');?>
<?php include('../headers/admin_header.php'); ?>
<?php require_once('../../shared/install.php');?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title> Vintage - manage items </title>
	</head>
<body>
	<div class = "main_wrapper">
			<div id = "right">
			<!-- <h2 style = "text-align: center; color: white; font-family: Georgia"> Manage Content: </h2> -->
        <a href= "index.php?view_customers"> View Customers</a></br>
				<a href= "index.php?add_admin"> Add new admin</a></br>
				<a href= "index.php?modify_user"> Modify data user</a></br>
				<a href= "index.php?delete_user"> Delete user</a></br>
      </div>
			<div id = "left">
				<?php
				if (isset($_GET['view_customers']))
					include("view_customers.php");
				if (isset($_GET['add_admin']))
					include("add_admin.php");
				if (isset($_GET['modify_user']))
					include ("modify_user.php");
				if (isset($_GET['delete_user']))
					include ("delete_user.php");
				?>
			</div>
    </div>
</body>
</html>
<?php include('../headers/admin_footer.php'); ?>

<!-- <html>
<title>Manage Users</title>
<link rel="stylesheet" media= "all" href ="../style_admin/account_create.css"/>
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
</html> -->
