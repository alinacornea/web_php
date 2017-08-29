<?php
include ("../../shared/initialize.php");
if(isset($_GET['delete_admin'])){
  $delete_id = $_GET['delete_admin'];
  $delete_user = "DELETE from Admins where id = '$delete_id'";
  $run_delete = mysqli_query($conn, $delete_user);
  if ($run_delete)
  {
    $msg = "Admin has been deleted!";
    echo "<script>alert('$msg');window.open('view_admins.php', '_self')</script>";
    return ;
  }
}
?>
