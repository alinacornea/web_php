<?php
session_start();
require_once('../../shared/initialize.php');
include('../headers/admin_header.php');

if ($_POST['submit'] === "Add Admin")
{
	global $conn;
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$pass = $_POST['passwd'];
	$hash = hash('whirlpool', $pass);
	$table = "Admins";
	$check = "select * from Admins where login='{$login}' and email='{$email}'";
	if (mysqli_query($conn, $check) === true)
	{
			echo "<script>alert('$login, You are already an admin!')</script>";
			echo "<script>window.open('../index.php', '_self')</script>";
			return;
	}
	else {
		# code...
		$insert_admin = "INSERT INTO $table(first_name, last_name, email, login, hash)
		values('$first', '$last', '$email', '$login', '$hash')";
		$insert = mysqli_query($conn, $insert_admin);
		if ($insert){
			echo "<script>alert('$login, You are now an admin!')</script>";
		}
		else {
			echo "Error: " . $insert . "<br>" . mysqli_error($conn);

		}
	}
}

?>
<html>
<title>Manage Users</title>
<link rel="stylesheet" media= "all" href ="../style_admin/account_create.css"/>
<body>
  <h2> Add a new admin:</h2>
    <form id="board"action="add_admin.php"method="post">
  	<div class="container">
    <label><b>First name</b></label>
    <input type="text" placeholder="Enter first name" name="first" value="" required />
    <label><b>Last name</b></label>
    <input type="text" placeholder="Enter last name" name="last" value="" required />
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="" required />
    <label><b>Login</b></label>
    <input type="text" placeholder="Enter Login" name="login" value="" required />
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" value="" required/>
    <input type="submit" class="signupbtn"  name="submit" value="Add Admin"/>
  </div>
</form>
</body>
</html>
