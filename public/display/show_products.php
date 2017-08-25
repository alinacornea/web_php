<!-- <?php  session_start(); ?> -->
<?php
  include('../../admin/headers/header.php');
?>
<!doctype html>

<html lang="en">

<link rel="stylesheet" href="../front_style/main.css">
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
    <button class="dropbt">Age</button>
    <div class="dropdown-content">
      <a href= "show_products.php?id=0"> < 1900</a></br>
      <a href= "show_products.php?id=1"> 1900-1920</a></br>
      <a href= "show_products.php?id=2"> 1921-1940</a></br>
      <a href= "show_products.php?id=3"> 1941-1960</a></br>
      <a href= "show_products.php?id=4"> 1961-1980</a></br>
      <a href= "show_products.php?id=5"> 1981-2000</a></br>
    </div>
  </div>
</body>
</html>

<?php
	require_once('../../shared/initialize.php');
  if ($_GET['category']){
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
    <div class = "title"><?php echo $pro_title;?> </div>
    <div><img class= "image"src = "../../admin/database/product_images/<?php echo $product_image;?>"/></div>
    <div class="description"> <?php echo $pro_desc;?></div>
    <div class = "price"> $<?php echo $pro_price;?></div>
    <!-- <div<?php echo $pro_year;?></div -->
    <div name="availability"> <?php if($pro_active == 1 && $pro_quantity > 0){echo "<font color='green'>available</font>";}else {echo "<font color='red'>not available</font>";}?> </div>
  </div>

<?php } }
else {
  $id = $_GET['id'];
  if ($id == 0)
  {
    $get_pro = "select * from Products where `year`<= '1900'";
  }
  else if ($id == 1)
  {
    $get_pro = "select * from Products where year >= '1901' and year <= '1920'" ;
  }
  else if ($id == 2)
  {
    $get_pro = "select * from Products where year >= '1921' and year <= '1940'" ;
  }
  else if ($id == 3)
  {
    $get_pro = "select * from Products where year >= '1941' and year <= '1960'" ;
  }
  else if ($id == 4)
  {
    $get_pro = "select * from Products where year >= '1961' and year <= '1980'" ;
  }
  else if ($id == 5){
    $get_pro = "select * from Products where year >= '1981' and year <= '2000'" ;
    # code...
  }
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
  <div class = "title"><?php echo $pro_title;?> </div>
  <div><img class= "image"src = "../../admin/database/product_images/<?php echo $product_image;?>"/></div>
  <div class="description"> <?php echo $pro_desc;?></div>
  <div class = "price"> $<?php echo $pro_price;?></div>
  <!-- <div<?php echo $pro_year;?></div -->
  <div name="availability"> <?php if($pro_active == 1 && $pro_quantity > 0){echo "<font color='green'>available</font>";}else {echo "<font color='red'>not available</font>";}?> </div>
  </div>
<?php }} ?>
<?php
  include('../../admin/headers/footer.php');
?>
