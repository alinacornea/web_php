<?php
if ($_POST['Update'] === "+")
{
      include ("../../shared/initialize.php");
      $update_id = $_GET['id'];
  		$product_quantity = $_POST['quantity'] + 1;
      $check = mysqli_query($conn, "SELECT * from Products where id='{$update_id}'");
      $var =  mysqli_fetch_array($check);
      $q = $var['quantity'];

      if ($q == 0 || $product_quantity > $q)
      {
        $msg = "The are no more items left in stock";
        echo "<script>alert('$msg');window.open('view_cart.php', '_self')</script>";
      }
      else {
        # code...
        $stock = $q - $product_quantity;
        $update_q = "UPDATE Cart SET quantity = '$product_quantity', max_stock = '$stock' WHERE id=$update_id";
        $update_pro = mysqli_query($conn, $update_q);
        if ($update_pro){
          echo "<script> window.open('view_cart.php', '_self')</script>";
          return ;
        }
        else {
          echo "Error: " . $update_pro . "<br>" . mysqli_error($conn);
        }
      }
}
else if ($_POST['Update'] === "-")
{
      include ("../../shared/initialize.php");
      $update_id = $_GET['id'];
  		$product_quantity = $_POST['quantity'] - 1;
      $check = mysqli_query($conn, "SELECT * from Products where id='{$update_id}'");
      $var =  mysqli_fetch_array($check);
      $q = $var['quantity'];
      if ($product_quantity == 0)
      {
        mysqli_query($conn, "DELETE from Cart where id = '$update_id'");
        echo "<script> window.open('view_cart.php', '_self')</script>";
      }
      else {
        # code...
        $check = mysqli_query($conn, "SELECT * from Cart where id='{$update_id}'");
        $v =  mysqli_fetch_array($check);
        $q = $v['max_stock'];
        $stock = $q + 1;
        $update_q = "UPDATE Cart SET quantity = '$product_quantity', max_stock = '$stock' WHERE id=$update_id";
        $update_pro = mysqli_query($conn, $update_q);
        if ($update_pro){
          echo "<script> window.open('view_cart.php', '_self')</script>";
          return ;
        }
        else {
          echo "Error: " . $update_pro . "<br>" . mysqli_error($conn);
        }
      }
}
?>
