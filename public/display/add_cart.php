<?php
session_start();
require_once('../../shared/initialize.php');

$check_login = $_SESSION['login'];

if ($_POST['submit'] === "Add to cart")
{
	
	$check = mysqli_query($conn, "select * from $table where login='{$login}' and email='{$email}'");
	$num = mysqli_num_rows($check);
	if ($num > 0)
	{
			echo "<script>alert('$login, This admin already exists!')</script>";
			echo "<script>window.open('add_admin.php', '_self')</script>";
			return;
	}
	else {
		# code...
		$insert_admin = "INSERT INTO $table(first_name, last_name, email, login, hash)
		values('$first', '$last', '$email', '$login', '$hash')";
		$insert = mysqli_query($conn, $insert_admin);
		if ($insert){
			echo "<script>alert('Adding '$login' as admin was succesfully done!')</script>";
			echo "<script>window.open('view_admins.php?login=$check_login', '_self')</script>";
		}
		else {
			echo "Error: " . $insert . "<br>" . mysqli_error($conn);
		}
	}
}

?>
