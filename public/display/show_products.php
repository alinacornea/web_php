<!-- <?php  session_start(); ?> -->
<?php
  include('../../admin/headers/header.php');
?>
<!doctype html>

<html lang="en">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono&effect=destruction">
<link rel="stylesheet" href="../front_style/index.css">
<head>
  <meta charset="utf-8">
  <title>Vintage - store </title>
  <link rel="icon" href="../images/rose.png"/>
</head>

<body>
  <div class = "main">
<article>
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
    <div class = "title"><b> <?php echo "$pro_title".","."$pro_year";?> </b></div>
    <div><img class= "image"src = "../../admin/database/product_images/<?php echo $product_image;?>"/></div>
    <div class="description"> <?php echo $pro_desc;?></div>
    <div class = "price"> $<?php echo $pro_price;?></div>
    <div class = "stock"> <?php if ($pro_quantity > 0) {echo "<div style='color:green;'>in stock ".$pro_quantity."</div>";} else {echo "<div style='color:red;'>SOLD</div>";}?></div>
    <div class = "add"><form action = "add_cart.php?id=<?php echo $pro_id; ?>" method="post">
    <input type="submit"  value="Add to cart" />
  </form>
</div>
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
  <div class = "title"><?php echo "$pro_title".", "."$pro_year";?> </div>
  <div><img class= "image"src = "../../admin/database/product_images/<?php echo $product_image;?>"/></div>
  <div class="description"> <?php echo $pro_desc;?></div>
  <div class = "price"> $<?php echo $pro_price;?></div>
  <div class = "stock"> <?php if ($pro_quantity > 0) {echo "<div style='color:green;'>in stock ".$pro_quantity."</div>";} else {echo "<div style='color:red;'>SOLD</div>";}?></div>
  <div class = "add">
  <form action="add_cart.php?id=<?php echo $pro_id; ?>" method="post" >
  <input id= "add" type="submit" value="Add to cart"/>
  </form>
</div>
  </div>
</article>
<?php }} ?>
<nav>
<div class="dropdown">
  <button class="dropbtn">Category</button>
  <div class="dropdown-content">
    <a href= "show_products.php?category=accesories"> Accesories</a></br>
    <a href= "show_products.php?category=art"> Art</a></br>
    <a href= "show_products.php?category=books"> Books</a></br>
    <a href= "show_products.php?category=clothes"> Clothes</a></br>
    <a href= "show_products.php?category=decorative"> Decorative</a></br>
    <a href= "show_products.php?category=furniture"> Furniture</a></br>
    <a href= "show_products.php?category=rugs"> Rugs</a></br>
    <a href= "show_products.php?category=timepieces"> Timepieces</a></br>
    <a href= "show_products.php?category=walldecor"> WallDecor</a></br>
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
</nav>
</div>
</body>
</html>
<?php
  include('../../admin/headers/footer.php');
?>
