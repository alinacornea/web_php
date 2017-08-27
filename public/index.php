<!-- <?php  session_start(); ?> -->
<?php
  include('../admin/headers/header.php');
?>
<!doctype html>

<html lang="en">

<link rel="stylesheet" href="front_style/display.css">
<head>
  <meta charset="utf-8">
  <title>Vintage - store </title>
  <link rel="icon" href="images/rose.png"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
</head>

<body>
  <div class="dropdown">
    <button class="dropbtn">Category</button>
    <div class="dropdown-content">
      <a href= "display/show_products.php?category=accesories"> Accesories</a></br>
      <a href= "display/show_products.php?category=art"> Art</a></br>
      <a href= "display/show_products.php?category=books"> Books</a></br>
      <a href= "display/show_products.php?category=clothes"> Clothes</a></br>
      <a href= "display/show_products.php?category=decorative"> Decorative</a></br>
      <a href= "display/show_products.php?category=furniture"> Furniture</a></br>
      <a href= "display/show_products.php?category=rugs"> Rugs</a></br>
      <a href= "display/show_products.php?category=timepieces"> Timepieces</a></br>
      <a href= "display/show_products.php?category=walldecor"> WallDecor</a></br>
    </div>
    <button class="dropbt">Age</button>
    <div class="dropdown-content">
      <a href= "display/show_products.php?id=0"> < 1900</a></br>
      <a href= "display/show_products.php?id=1"> 1900-1920</a></br>
      <a href= "display/show_products.php?id=2"> 1921-1940</a></br>
      <a href= "display/show_products.php?id=3"> 1941-1960</a></br>
      <a href= "display/show_products.php?id=4"> 1961-1980</a></br>
      <a href= "display/show_products.php?id=5"> 1981-2000</a></br>
    </div>
  </div>

</body>
</html>
<?php
  include('../admin/headers/footer.php');
?>
