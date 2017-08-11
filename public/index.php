<?php  session_start(); ?>
<?php require_once('../shared/initialize.php'); ?>
<?php include('../admin/headers/header.php'); ?>

<style>
body {
    background-repeat: repeat;
    background-image: url(../resources/bg3.jpg);
    font-family: "Book Antiqua", Palatino, serif;
    font-size-adjust: auto;
}
</style>
<div id="content">
  <div id="main-menu">
    <ul>
      <li> <img src="images/login.png"  alt="Login" style="width:40px;height:40px;">
        <a href="../admin/users/login.php"> Login Account </a></li>
        <li>
          <img src="images/logout.png" alt="Logout" style="width:40px;height:40px;">
          <a href="../admin/users/logout.php"> Logout </a></li>
      <li> <img src="images/admin.png" alt="Admin" style="width:40px;height:40px;">
        <a target="_blank" href="../admin/users/admin_login.php"> Admin Area </a></li>
      <li> <img src="images/cart.png" alt="Cart" style="width:40px;height:40px;">
        <a href="buy_product.php"> Shoping cart </a>
      </li>
    </ul>
  </div>

  <div id="1part" > <a href="../public/show_category.php?id=a"> 50-60 </a></div>
  <div id="2part" ><a href="../public/show_category.php?id=b"> 60-70 </a></div>
  <div id="3part" ><a href="../public/show_category.php?id=c"> 70-80 </a></div>
  <div id="4part" ><a href="../public/show_category.php?id=d"> 80-90 </a></div>
  <div id="show_all"> <a href="../public/show_product.php"> Show all products </a> </div>
</div>


<?php include('../admin/headers/footer.php'); ?>
