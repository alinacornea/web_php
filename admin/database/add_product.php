<!DOCTYPE>
<?php
include ("../../shared/initialize.php");
include('../headers/admin_header.php'); ?>
?>
<html>
<head>
<title> Inserting Product</title>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=7esowxa7k837avq333arkqa7eenq77kzuk2ubcuky5sklbtr"></script>
  <script> tinymce.init({ selector:'textarea' }); </script>
</head>
<body>
	<form action = "add_product.php" method = "post" enctype = "multipart/form-data">
	<table align = "center" width = "927" height = "700" border = "5" bgcolor = "grey">
	<tr align = "center">
		<td colspan = "7">
			<h2>Insert New Product Here</h2>
		</td>
	</tr>
	<tr>
		<td align = "right"><b>Product Title:</b></td>
		<td><input type= "text" name = "title" size = "50" placeholder="insert title"required/></td>
	</tr>
	<tr>
		<td align = "right"><b>Product Category:</b> </td>
		<td><select name= "category">
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
    <td><textarea name = "description"></textarea></td>
  </tr>
  <tr>
    <td align = "right"><b>Product Image:</b> </td>
    <td><input type="file" name="img_path"/></td>
    </tr>
  <tr>
    <td align = "right"><b>Product Price:</b> </td>
    <td><input type= "text" name = "price" size = "15" placeholder="insert price"required/></td>
  </tr>
  <tr>
    <td align = "right"><b>Product Year:</b> </td>
    <td>
      <!-- <select name="year" id="year"> </select>
        <script>
          var start = 1900;
          var end = new Date().getFullYear();
          var options = "";
          for(var year = start ; year <=end; year++){
            options += "<option>"+ year +"</option>";
          }
          document.getElementById("year").innerHTML = options;
        </script> -->
      <input type = "text" name = "year" placeholder="insert year"size = "15"/>
    </td>
  </tr>
  <tr>
    <td align = "right"><b>Product Quantity:</b> </td>
    <td><input type = "text" name = "quantity" placeholder="insert quantity"size = "15"/></td>
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
		$product_title = $_POST['title'];
		$product_cat = $_POST['category'];
    $product_desc = $_POST['description'];
    $product_image = $_FILES['img_path']['name'];
    $product_image_tmp = $_FILES['img_path']['tmp_name'];
    move_uploaded_file($product_image_tmp, "product_images/$product_image");
    $product_price = $_POST['price'];
    $product_quantity = $_POST['quantity'];
    $product_year = $_POST['year'];
    $table = "Products";
    $check = "ALTER TABLE Products ADD UNIQUE INDEX(title, category, description, img_path, price, year, quantity)";
    mysqli_query($conn, $check);
		$insert_product = "INSERT IGNORE INTO $table(title, category, description, img_path, price, year, quantity)
		values('$product_title', '$product_cat', '$product_desc', '$product_image', '$product_price', '$product_year','$product_quantity')";
    $insert_pro = mysqli_query($conn, $insert_product);
    if ($insert_pro){
      echo"<script>alert('A new product was inserted!')</script>";
      echo "<script>window.open('view_all.php', '_self')</script>";
      return ;
    }
    else {
        echo "Error: " . $insert_product . "<br>" . mysqli_error($conn);

    }
  }
?>
<?php
include('../headers/admin_footer.php'); ?>
?>
