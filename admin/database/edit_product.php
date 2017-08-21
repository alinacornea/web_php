
<div style= "overflow-x:auto;">
<link rel="stylesheet" href="http://localhost:8080/ecommerce/admin/style_admin/view.css">
<table>
  <tr align = "center">
    <td colspan = "9"><h2>Update a product</h2></td>
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
    <td></td>
  </tr>
  <?php
    include ("../../shared/initialize.php");
    $get_pro = "select * from Products";
    $run_pro = mysqli_query($conn, $get_pro);
    $i = 0;
    while ($row_pro = mysqli_fetch_array($run_pro))
    {
      $pro_id = $row_pro['product_id'];
      $pro_title = $row_pro['title'];
      $pro_cat = $row_pro['category'];
      $pro_desc = $row_pro['description'];
      $pro_image = $row_pro['img_path'];
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
    <td><img src = "product_images/<?php echo $pro_image;?>"width= "80" height = "80"/></td>
    <td><?php echo $pro_price;?></td>
    <td><?php echo $pro_year;?></td>
    <td><?php echo $pro_quantity;?></td>
    <td><?php if($pro_active == 1 || $pro_quantity > 0){echo "active";}else {echo"not active";}?></td>
    <td> <input type="submit" name="update_post" value="Update Now"/></td>
  </tr>
<?php } ?>
</table>
<div>

<?php
	if (isset($_POST['update_post']))
	{
    $update_id = $pro_id;
		$product_title = $_POST['title'];
		$product_cat = $_POST['category'];
    $product_desc = $_POST['description'];
    $product_image = $_FILES['img_path']['name'];
    $product_image_tmp = $_FILES['img_path']['tmp_name'];
    move_uploaded_file($product_image_tmp, "../product_images/$product_image");
    $product_price = $_POST['price'];
		$product_quantity = $_POST['quantity'];
    $product_year= $_POST['year'];
    $product_active = $_POST['availability'];
		$update_product = "UPDATE Products SET title = '$product_title',category = '$product_cat', description = '$product_desc',
    img_path = '$product_image', price = '$product_price', year = '$product_year', quantity = '$product_quantity',availability = '$product_active' WHERE id = '$update_id'";
    $update_pro = mysqli_query($conn, $update_product);
    if ($update_pro){
      $msg = "Product has been updated!";
      echo "<script>alert('$msg');location.href = 'http://localhost:8080/ecommerce/admin/database/index.php?view_all.php'</script>";
      return ;
    }
    else {
        echo "Error: " . $update_product . "<br>" . mysqli_error($conn);
    }
  }
?>
