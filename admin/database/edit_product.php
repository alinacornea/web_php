<?php
	require_once('../../shared/initialize.php');
	include('../headers/admin_header.php');
?>
<div style= "overflow-x:auto; width:100%;">
<link rel="stylesheet" type="text/css" href="../style_admin/view_products.css">
<table>
  <tr align = "center">
    <td colspan = "10"><h2>Update a product</h2></td>
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
    <td></td>
  </tr>
  <?php
    include ("../../shared/initialize.php");
    $id = $_GET['edit_product'];
    $get_pro = "SELECT * FROM `Products` WHERE `id`='{$id}'";
    $run_pro = mysqli_query($conn, $get_pro);
    $row_pro = mysqli_fetch_array($run_pro);
    $pro_title = $row_pro['title'];
    $pro_cat = $row_pro['category'];
    $pro_desc = $row_pro['description'];
    $pro_img = $row_pro['img_path'];
    $pro_price = $row_pro['price'];
    $pro_year = $row_pro['year'];
    $pro_quantity = $row_pro['quantity'];
  ?>
  <form action="edit_product.php?id=<?php echo $id; ?>" method="post" width="100%" enctype="multipart/form-data">
  <tr id="info">
    <td><?php echo $id;?></td>
    <td align="center"><input type="text" name="title"value="<?php echo $pro_title;?>"></td>
    <td><input type="text" name="category"value="<?php echo $pro_cat;?>">
      <select name= "category">
			<option>Select a Category</option>
			<?php
				$get_cat = "SELECT * from Categories";
				$run_cat = mysqli_query($conn, $get_cat);
				while($row_cat = mysqli_fetch_array($run_cat))
				{
					$cat_id = $row_cat['cat_id'];
					$cat_title = $row_cat['cat_title'];
          echo "<option>$cat_title</option>";
				}
			 ?>
		</select></td>
    <td id="desc"><input type="text" name="description"value="<?php echo $pro_desc;?>"></td>
    <td><input type="file" name="img_path"> <img src = "product_images/<?php echo $pro_img;?>"width= "80" height = "50"/></td>
    <td><input type="text" name="price"value="<?php echo $pro_price;?>"></td>
    <td><input type="text" name="year"value="<?php echo $pro_year;?>"></td>
    <td><input type="text" name="quantity"value="<?php echo $pro_quantity;?>"></td>
    <td><input type="submit" name="update_post" value="Update Now"/></td>
  </tr>
</form>
</table>
</div>

<?php
	if (isset($_POST['update_post']))
	{
    $update_id = $_GET['id'];
		$product_title = $_POST['title'];
		$product_cat = $_POST['category'];
    $product_desc = $_POST['description'];
    $product_image = $_FILES['img_path']['name'];
    $product_image_tmp = $_FILES['img_path']['tmp_name'];
    move_uploaded_file($product_image_tmp, "product_images/$product_image");
    $product_price = $_POST['price'];
		$product_quantity = $_POST['quantity'];
    $product_year= $_POST['year'];
    $table = 'Products';
		$update_product = "UPDATE $table SET title = '$product_title',category = '$product_cat', description = '$product_desc', img_path='$product_image',
    price = '$product_price', year = '$product_year', quantity = '$product_quantity' WHERE id=$update_id";
    $update_pro = mysqli_query($conn, $update_product);
    if ($update_pro){
      echo "<script> window.open('view_all.php', '_self')</script>";
      return ;
    }
    else {
        echo "Error: " . $update_product . "<br>" . mysqli_error($conn);
    }
  }
?>
<?php
include('../headers/admin_footer.php');
?>
