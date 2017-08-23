<?php  session_start(); ?>
<?php require_once('../shared/initialize.php'); ?>
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Vintage - store </title>
  <link rel="icon" href="images/rose.png"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="front_style/home_style.css">
</head>

<body>
    <header>
      <h1>

        <a title="Home"href="<?php echo ("http://localhost:8080/ecommerce/public/index.php?login=$login") ;?>"> <img id="home" src="images/home.png" alt="Home"></a>
        Vintage Store
        <a title="Cart" href="buy_product.php"> <img id="cart" src="images/cart.png" alt="Cart"></a>
        <a title="Admin" target="_blank" href="../admin/users/admin_login.php"><img id="admin" src="images/admin.png" alt="Admin"></a>
        <a title="Logout" href="../admin/users/logout.php"><img id="logout" src="images/logout.png" alt="Logout"></a>
        <a title="Login" href="../admin/users/login.php"> <img id="login"src="images/login.png" alt="Login"></a>
      </h1>
    </header>

<div id="content">
  <div id="main-menu">
    <ul>

    </ul>
  </div>

  <!-- <div id="1part" > <a href="../public/show_category.php?id=a"> 50-60 </a></div>
  <div id="2part" ><a href="../public/show_category.php?id=b"> 60-70 </a></div>
  <div id="3part" ><a href="../public/show_category.php?id=c"> 70-80 </a></div>
  <div id="4part" ><a href="../public/show_category.php?id=d"> 80-90 </a></div> -->
  <div id="show_all"> <a href="../public/show_product.php"> Show all products </a> </div>
</div>


<?php include('../admin/headers/footer.php'); ?>
