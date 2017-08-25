<!-- <?php  session_start(); ?> -->
<?php
  include('../../admin/headers/header.php');
?>
<!doctype html>

<html lang="en">

<link rel="stylesheet" href="../front_style/home.css">
<head>
  <meta charset="utf-8">
  <title>Vintage - store </title>
  <link rel="icon" href="../images/rose.png"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
</head>

<body>
  <div class="dropdown" align = "left">
    <button class="dropbtn">Category</button>
    <div class="dropdown-content">
      <a href= "http://localhost:8080/ecommerce/public/display/show_products.php?category=accesories"> Accesories</a></br>
      <a href= "http://localhost:8080/ecommerce/public/display/show_products.php?category=art"> Art</a></br>
      <a href= "http://localhost:8080/ecommerce/public/display/show_products.php?category=books"> Books</a></br>
      <a href= "http://localhost:8080/ecommerce/public/display/show_products.php?category=clothes"> Clothes</a></br>
      <a href= "http://localhost:8080/ecommerce/public/display/show_products.php?category=decorative"> Decorative</a></br>
      <a href= "http://localhost:8080/ecommerce/public/display/show_products.php?category=furniture"> Furniture</a></br>
      <a href= "http://localhost:8080/ecommerce/public/display/show_products.php?category=rugs"> Rugs</a></br>
      <a href= "http://localhost:8080/ecommerce/public/display/show_products.php?category=timepieces"> Timepieces</a></br>
      <a href= "http://localhost:8080/ecommerce/public/display/show_products.php?category=walldecor"> WallDecor</a></br>
    </div>
  </div>
</div>

</body>
</html>



<?php
	require_once('../../shared/initialize.php');
  $category = $_GET['category'];
  $get_pro = "select * from Products where category='{$category}'";
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

<div class ="product">
  <td id = "title"><?php echo $pro_title;?></b>
  <td><img id = "image" src = "../../admin/database/product_images/<?php echo $product_image;?>"/></td>
  <td id="description"> <?php echo $pro_desc;?></td>
  <td id = "price"> $<?php echo $pro_price;?></td> <br/>
  <!-- <td><?php echo $pro_year;?></td> -->
  <td name="availability"><?php if($pro_active == 1 && $pro_quantity > 0){echo "<font color='green'>available</font>";}else {echo "<font color='red'>not available</font>";}?></td>
</div>
<?php } ?>

<?php
  include('../../admin/headers/footer.php');
?>
