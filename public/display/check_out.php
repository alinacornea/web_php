<?php
include('../../admin/headers/header.php');
?>
<?php
	if ($_POST['submit'] === "Proceed to checkout")
	{
    include ("../../shared/initialize.php");
    $all = mysqli_query($conn, "SELECT * from Cart");
    $i = 0;
    while ($var = mysqli_fetch_array($all)){
      $id = $var['id'];
      $stock = $var['max_stock'];
      mysqli_query($conn, "UPDATE Products SET quantity = '$stock' WHERE id='$id'");
      $delete = mysqli_query($conn, "DELETE from Cart where id = '$id'");
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
