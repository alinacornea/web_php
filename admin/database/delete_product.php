<?php
include ("../../shared/initialize.php");
if(isset($_GET['delete_product'])){
  $delete_id = $_GET['delete_product'];
  $delete_product = "DELETE from Products where id = '$delete_id'";
  $run_delete = mysqli_query($conn, $delete_product);

  if ($run_delete)
  {
    $msg = "Product has been deleted!";
    echo "<script>alert('$msg');location.href = 'http://localhost:8080/ecommerce/admin/database/index.php?view_all'</script>";
    return ;
  }
}
 ?>
