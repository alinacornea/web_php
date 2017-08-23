<?php
include('../headers/admin_header.php'); ?>
?>
<div style= "overflow-x:auto;">
<link rel="stylesheet" type="text/css" href="../style_admin/view.css">
<table  border = "5" >
  <tr align = "center">
    <td colspan = "9"><h2>View All Products</h2></td>
  </tr>
  <tr id="name">
    <td>Id</</td>
    <td>Title</td>
    <td>Category</td>
    <td>Description</td>
    <td>Image</td>
    <td>Price</td>
    <td>Year</td>
    <td>Quantity</td>
    <td>Active</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
  <?php
    include ("../../shared/initialize.php");
    $get_pro = "select * from Products";
    $run_pro = mysqli_query($conn, $get_pro);
    $i = 0;
    while ($row_pro = mysqli_fetch_array($run_pro))
    {
      $pro_id = $row_pro['id'];
      $pro_title = $row_pro['title'];
      $pro_cat = $row_pro['category'];
      $pro_desc = $row_pro['description'];
      $product_image = $row_pro['img_path'];
      $pro_price = $row_pro['price'];
      $pro_year = $row_pro['year'];
      $pro_quantity = $row_pro['quantity'];
      $pro_active = $row_pro['availability'];
      $i++;
  ?>
  <tr id="info">
    <td><?php echo $i;?></td>
    <td align= "center"><b><?php echo $pro_title;?></b></td>
    <td align= "center"><?php echo $pro_cat;?></td>
    <td id="desc"><?php echo $pro_desc;?></td>
    <td><img src = "product_images/<?php echo $product_image;?>"width= "80" height = "50"/></td>
    <td><?php echo $pro_price;?></td>
    <td><?php echo $pro_year;?></td>
    <td><?php echo $pro_quantity;?></td>
    <td name="availability"><?php if($pro_active == 1 && $pro_quantity > 0){echo "<font color='green'>active</font>";}else {echo "<font color='red'>not active</font>";}?></td>
    <td><a href = "edit_product.php?edit_product=<?php echo $pro_id; ?>">Edit</a></td>
    <td><a href = "delete_product.php?delete_product=<?php echo $pro_id;?>">Delete</a></td>
  </tr>
<?php } ?>
</table>
<div>
<?php
  include('../headers/admin_footer.php'); ?>
?>
