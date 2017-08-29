<?php
include('../../admin/headers/header.php');
?>
<?php
	$login = $_GET['login'];
	if ($_POST['submit'] === "Proceed to checkout")
	{
    include ("../../shared/initialize.php");
    $all = mysqli_query($conn, "SELECT * from Cart where login='$login'");
    $i = 0;
    while ($var = mysqli_fetch_array($all)){
      $id = $var['id'];
      $stock = $var['max_stock'];
      mysqli_query($conn, "UPDATE Products SET quantity = '$stock' WHERE id='$id'");
      $delete = mysqli_query($conn, "DELETE from Cart where id = '$id' AND login='$login'");
      $i++;
    }
    if (!$var)
    {
      $msg = "Checkout was succesfully done!";
      echo "<script>alert('$msg');window.open('view_cart.php', '_self')</script>";
    }
  }
?>
<?php
include('../../admin/headers/footer.php');
?>
