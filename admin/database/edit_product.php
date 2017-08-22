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
    <td></td>
  </tr>
  <?php
    include ("../../shared/initialize.php");
    $id = $_GET['edit_product'];
    $get_pro = "select * from Products where id=$id";
    $run_pro = mysqli_query($conn, $get_pro);
    $row_pro = mysqli_fetch_array($run_pro);
    $pro_title = $row_pro['title'];
    $pro_cat = $row_pro['category'];
    $pro_desc = $row_pro['description'];
    $img = $row_pro['img_path'];
    $pro_price = $row_pro['price'];
    $pro_year = $row_pro['year'];
    $pro_quantity = $row_pro['quantity'];
  ?>
  <form name="form" width="100%" method="post" action="edit_product.php?id=<?php echo $id; ?>">
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
    <td><input type="file" name="image"/>  <img src = "product_images/<?php echo $img;?>"width= "80" height = "80"/>
    </td>
    <td><input type="text" name="price"value="<?php echo $pro_price;?>"></td>
    <td><input type="text" name="year"value="<?php echo $pro_year;?>"></td>
    <td><input type="text" name="quantity"value="<?php echo $pro_quantity;?>"></td>
    <td> <input type="submit" name="update_post" value="Update Now"/></td>
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
    $img_path = $_FILES['image']['name'];
    $product_image_tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($product_image_tmp, "product_images/$img_path");
    print($img_path);
    $product_price = $_POST['price'];
		$product_quantity = $_POST['quantity'];
    $product_year= $_POST['year'];
		$update_product = "UPDATE Products SET title = '$product_title',category = '$product_cat', description = '$product_desc',
    img_path = '$img_path', price = '$product_price', year = '$product_year', quantity = '$product_quantity' WHERE id=$update_id";
    $update_pro = mysqli_query($conn, $update_product);
    if ($update_pro){
      $msg = "Product has been updated!";
      echo "<script>alert('$msg');location.href = 'http://localhost:8080/ecommerce/admin/database/index.php?view_all'</script>";
      return ;
    }
    else {
        echo "Error: " . $update_product . "<br>" . mysqli_error($conn);
    }
  }
?>
