<?php
session_start();
	require_once('../../shared/initialize.php');
	$id = $_GET['id'];
	global $login;

	$get_email = mysqli_query($conn, "select * from Users where login='{$login}'");
	if(!$get_email){
		echo "Error: " . $check . "<br>" . mysqli_error($conn);}
	$check = mysqli_query($conn, "select * from Products where id='{$id}'");
	$check_cart = mysqli_query($conn, "select * from Cart where id='{$id}'");
	$i = 0;
	while ($cart = mysqli_fetch_array($check_cart)){
		$id_cart = $cart['id'];
		$i++;
	}
	$i = 0;
	while($var = mysqli_fetch_array($get_email)){
		$email = $var['email'];
		$i++;
	}

	$i = 0;
	while ($row_pro = mysqli_fetch_array($check))
	{
		$pro_id = $row_pro['id'];
		$pro_title = $row_pro['title'];
		$pro_cat = $row_pro['category'];
		$pro_desc = $row_pro['description'];
		$product_image = $row_pro['img_path'];
		$pro_price = $row_pro['price'];
		$pro_year = $row_pro['year'];
		$pro_quantity += 1;
		$stock = $row_pro['quantity'];
		$pro_active = $row_pro['availability'];
		$i++;
	}
	if ($stock == 0)
	{
			echo "<script> alert('$pro_title, is not available anymore!'); window.open('show_products.php?category=$pro_cat', '_self');</script>";
			return;
	}
	else if($id_cart == $id){
		echo "<script> alert('$pro_title, is in your cart already!!'); window.open('view_cart.php', '_self');</script>";
		return;
	}
	else {
		# code...
		$insert = $stock - 1;
		$insert_cart = "INSERT INTO Cart(id, email, login, title, category, description, img_path, price, quantity, max_stock, year)
		values('$pro_id', '$email', '$login', '$pro_title', '$pro_cat', '$pro_desc', '$product_image', '$pro_price', '$pro_quantity', '$insert', '$pro_year')";
		$insert = mysqli_query($conn, $insert_cart);
		if ($insert){
			echo "<script>alert('Adding \"$pro_title\" into your cart!')</script>";
			echo "<script> window.open('show_products.php?category=$pro_cat', '_self')</script>";
		}
		else {
			echo "Error: " . $insert . "<br>" . mysqli_error($conn);
		}
	}

?>
