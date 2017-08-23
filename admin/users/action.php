<?php
session_start();
require_once('../../shared/initialize.php');
$login = $_POST['login'];
$_SESSION['login'] = $login;

if ($_POST['submit'] === "Create an account")
{
	global $conn;
	$hash = hash('whirlpool', $pass);
	$first = $_POST['first'];
	$last = $_POST['last'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$pass = $_POST['passwd'];
	$table = "Users";
	$check = "ALTER TABLE Products ADD UNIQUE INDEX(first_name, last_name, phone, email, login, password, hash)";
	mysqli_query($conn, $check);
	$insert_user = "INSERT IGNORE INTO $table(first_name, last_name, phone, email, login, password, hash)
	values('$first', '$last', '$phone', '$email', '$login', '$pass','$hash')";
	$insert = mysqli_query($conn, $insert_user);
	if ($insert){
	  $msg = "Account was created!";
	  echo "<script>alert('$msg');location.href = 'http://localhost:8080/ecommerce/public/index.php?login=$login'</script>";
	  return ;
	}
	else {
	   echo "Error: " . $insert_product . "<br>" . mysqli_error($conn);

	}
}
?>
