<?php
include ("../../shared/initialize.php");
if(isset($_GET['delete_cat'])){
  $delete_id = $_GET['delete_cat'];
  $delete_cat = "DELETE from Categories where cat_id = '$delete_id'";
  $run_delete = mysqli_query($conn, $delete_cat);
  if ($run_delete)
  {
    echo"<script>alert('A product has been deleted!')</script>";
    echo "<script>window.open('view_categories.php', '_self')</script>";
  }
}
?>
