<!DOCTYPE>
<?php
include ("../../shared/initialize.php");
?>
<html>
<head>
<title> Inserting Product</title>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=7esowxa7k837avq333arkqa7eenq77kzuk2ubcuky5sklbtr"></script>
  <script> tinymce.init({ selector:'textarea' }); </script>
</head>
<body>
	<form action = "add_product.php" method = "post" enctype = "multipart/form-data">
	<table align = "center" width = "827" height = "800" border = "5" bgcolor = "grey">
	<tr align = "center">
		<td colspan = "7">
			<h2>Insert New Product Here</h2>
		</td>
	</tr>
	<tr>
		<td align = "right"><b>Product Title:</b></td>
		<td><input type= "text" style ="height:25px" name = "product_title" size = "50" required/></td>
	</tr>
	<tr>
		<td align = "right"><b>Product Category:</b> </td>
		<td><select name= "product_cat">
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
	</tr>
  <tr>
    <td align = "right"><b>Product Description:</b> </td>
    <td><textarea name = "product_desc" colls = "20" rows = "8"></textarea></td>
  </tr>
  <tr>
    <td align = "right"><b>Product Image:</b> </td>
    <td><input type= "file" name = "product_image"/></td>
    </tr>
  <tr>
    <td align = "right"><b>Product Price:</b> </td>
    <td><input type= "text" style ="height:25px" name = "product_price" size = "15"required/></td>
  </tr>
  <tr>
    <td align = "right"><b>Product Quantity:</b> </td>
    <td><input type = "text" style ="height:25px" name = "product_quantity" size = "15"/></td>
  </tr>
  <tr>
    <td align = "right"><b>Product Year:</b> </td>
    <td><input type = "text" style ="height:25px" name = "product_year" size = "15"/></td>
  </tr>
  <tr>
		<td align = "right"><b>Product Active:</b> </td>
		<td><input type = "text" style ="height:25px" name = "product_active" size = "15"/></td>
	</tr>
	<tr align = "center">
		<td colspan = "10"><input type= "submit" style ="height:35px; width:150px" name = "insert_post" value = "Insert Now"/></td>
	</tr>
	</table>
</body>
</html>

<?php
	if (isset($_POST['insert_post']))
	{
    global $conn;
		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
    $product_desc = $_POST['product_desc'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];
    move_uploaded_file($product_image_tmp, "product_images/$product_image");
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $product_year = $_POST['product_year'];
    $product_active = $_POST['product_active'];
    $table = "Products";
		$insert_product = "INSERT INTO $table(title, category, description, img_path, price, quantity, year, availability)
		values('$product_title', '$product_cat', '$product_desc', '$product_image', '$product_price', '$product_quantity', '$product_year','$product_active')";
    $insert_pro = mysqli_query($conn, $insert_product);
    if ($insert_pro){
      echo "<script>alert('Product has been inserted!')</script>";
      echo "<script>window.open('index.php?insert_product.php', '_self')</script>";
    }
    else {
        echo "Error: " . $insert_product . "<br>" . mysqli_error($conn);

    }
  }
?>
