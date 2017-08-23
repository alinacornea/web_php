<?php
  include('../headers/admin_header.php');
?>
<table width = "825" height= "700" align = "center" bgcolor = "grey"  border = "5">
  <tr align = "center">
    <td colspan = "6"><h2>All Categories</h2></td>
  </tr>
  <tr align = "center" bgcolor = "#A8C7D6">
    <td><b>Category Id</</td>
    <td><b>Category Title</td>
    <td><b>Edit</td>
    <td><b>Delete</td>
  </tr>
  <?php
    include ("../../shared/initialize.php");
    $get_cat = "select * from Categories";
    $run_cat = mysqli_query($conn, $get_cat);
    $i = 0;
    while ($row_cat = mysqli_fetch_array($run_cat))
    {
      $cat_id = $row_cat['cat_id'];
      $cat_title = $row_cat['cat_title'];
      $i++;
  ?>
  <tr bgcolor = "#A9A9A9" align = "center">
    <td><?php echo $i;?></td>
    <td><b><?php echo $cat_title;?></b></td>
    <td><a href = "edit_category.php?edit_category=<?php echo $cat_id; ?>">Edit</a></td>
    <td><a href = "delete_cat.php?delete_cat=<?php echo $cat_id;?>">Delete</a></td>
  </tr>
<?php } ?>

<tr>
  <td colspan ="10"><form action="" method= "post" align = "right">
  <input type= "text" size="20" name = "new_cat" placeholder = "New category" required/>
  <input type = "submit" style="border: 2px solid;border-radius: 25px;"name = "add_category" value = "Add a new category"/>
  </form>
  </td>
</tr>
</table>


<?php
include ("../../shared/initialize.php");
if (isset($_POST['add_category']))
{
  $new_cat = $_POST['new_cat'];
  $get_id = mysqli_insert_id($conn);
  $insert_cat = "INSERT INTO Categories(cat_id, cat_title) values ('$get_id', '$new_cat')";
  $run_cat = mysqli_query($conn, $insert_cat);
  if ($run_cat)
  {
    echo "<script>alert('New category has been inserted!')</script>";
    echo "<script>window.open('view_categories.php', '_self')</script>";
  }
  else {
      echo "Error: " . $insert_cat . "<br>" . mysqli_error($conn);
  }

}
?>
