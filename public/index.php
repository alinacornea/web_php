<?php
  include('../admin/headers/header.php');
?>
<!doctype html>

<html lang="en">

<link rel="stylesheet" href="front_style/index.css">
<head>
  <meta charset="utf-8">
  <title>Vintage - store </title>
  <link rel="icon" href="images/rose.png"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono&effect=destruction">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
</head>

<body>
  <div style="float:right;margin-right:50px;margin-top:50px;position:relative;overflow:hidden;">
    <iframe title="Stupeflix Video Player" class="SxPlayer" src="//studio.stupeflix.com/embed/jTNIiPLTFo03/" width="840" height="660" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true">
    </iframe>
  </div>
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

<link rel="stylesheet" href="front_style/footer.css">
<footer>
  <div class="flower">
    <img src="images/f.jpg" width="300"; height="180">
  </div>
 <div class= "create"> <p> Create by: Cornea Alina</p>
    <p> Contact information: <a href="alinacornea18@gmail.com"><img id="email" src="images/gmail.png" ></a>
    alinacornea18@gmail.com</a> <br/><br/> </p>
    <div class="social">
      <a title="facebook" href="#"> <img id="image" src="images/facebook-logo.png"></a>
      <a title="instagram" href="#"><img id="image" src="images/instagram.png"></a>
      <a title="pinterest" href="#"><img id="image" src="images/pinterest.png"></a>
      <a title="twitter" href="#"> <img id="image"src="images/twitter2.png"></a>
      <a title="linkedin" href="#"> <img id="image"src="images/linkedin.png"></a>
      <a title="youtube" href="#"> <img id="image"src="images/youtube.png"></a>
    </div>
    <p>&copy; <?php echo date('Y'); ?> Vintage Store, Fremont, California </p>
  </div>
</footer>
</body>
</html>
