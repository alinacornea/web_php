<?php
include('../headers/admin_header.php');
?>
<link rel="stylesheet" type="text/css" href="../style_admin/category.css">
<table align="center">
  <tr align = "center">
    <td colspan = "6"><h2>Modify Category</h2></td>
  </tr>
  <tr align = "center" bgcolor = "#A8C7D6">
    <td><b>Category Id</</td>
    <td><b>Category Title</td>
    <td><b></td>
  </tr>
  <?php
    $cat_id=$_GET['edit_category'];
    include ("../../shared/initialize.php");
    $get_cat = "select * from Categories where cat_id='{$cat_id}'";
    $run_cat = mysqli_query($conn, $get_cat);
    $row_cat = mysqli_fetch_array($run_cat);
    $cat_title = $row_cat['cat_title'];
  ?>
  <form action="edit_category.php?<?php echo $cat_id; ?>" method="post">
  <tr bgcolor = "#A9A9A9" align = "center">
    <td><input type="text" name="cat_id"value="<?php echo $cat_id;?>"></td>
    <td><input type="text" name="cat_title"value="<?php echo $cat_title;?>"></td>
    <td><input type="submit" name="update_post" value="Update Now"></td>
  </tr>
  </form>
</table>
<?php
  if (isset($_POST['update_post']))
  {
    $cat_id = $_POST['cat_id'];
    $cat_title = $_POST['cat_title'];
    print
    $update_product = "UPDATE Categories SET cat_title = '$cat_title' WHERE cat_id=$cat_id";
    print_r($update_pro);
    $update_pro = mysqli_query($conn, $update_product);
    if ($update_pro){
      echo "<script> window.open('view_categories.php', '_self')</script>";
        return ;
    }
    else {
      echo "Error: " . $update_product . "<br>" . mysqli_error($conn);
      }
    }
    include('../headers/admin_footer.php');
?>
