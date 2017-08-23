// else if ($_POST['submit'] === "Delete User")
// {
// 	$did = false;
// 	$hash = hash('whirlpool', $pass);
// 	$check = unserialize(file_get_contents("private/passwd"));
// 	$i = 0;
// 	foreach($check as $value)
// 	{
// 		if ($value['login'] === $login && $value['passwd'] === $hash && $value['email'] === $email)
// 		{
// 				unset($check[$i]['email']);
// 				unset($check[$i]['login']);
// 				unset($check[$i]['passwd']);
// 				$did = true;
// 				break ;
// 		}
// 		$i++;
// 	}
// 	if ($did == true)
// 	{
// 		$convert = serialize($check);
// 		file_put_contents("private/passwd", $convert);
// 		$msg = "This user was deleted!";
// 		echo "<script> alert('$msg'); location.href='http://localhost:8080/ecommerce/admin/users/admin_page.php'; </script>";
// 	}
// 	else {
// 		# code...
// 		$msg = "Wrong login or password";
// 		echo "<script> alert('$msg'); location.href='http://localhost:8080/ecommerce/admin/users/manage_users.php'; </script>";
// 	}
// }
// else if ($_POST['submit'] === "Modify Admin")
// {
//
// }
