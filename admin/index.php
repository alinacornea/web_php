<?php require_once('../shared/initialize.php'); ?>
<?php include('headers/admin_header.php');?>

<html>
<title>Admin Area</title>
<link rel="stylesheet" type="text/css" href="style_admin/admin_page.css">
<body align = "center">
  <div class="dropdown">
    <button class="dropbtn">Manage products</button>
    <div class="dropdown-content">
      <a href= "database/add_product.php"> Insert New Product</a></br>
      <a href= "database/view_all.php"> View All Products</a></br>
      <a href= "database/view_categories.php"> View All Categories</a></br>
      <a href= "database/view_categories.php"> View All Categories</a></br>
    </div>
    <div id = "left">
      <?php
      if (isset($_GET['edit_product']))
        include ("edit_product.php");
      if (isset($_GET['insert_cat']))
        include ("insert_cat.php");
      if (isset($_GET['edit_category']))
        include ("edit_category.php");
      ?>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Manage users</button>
    <div class="dropdown-content">
      <a href= "users/view_customers.php?login=<?php echo $login;?>"> View All Users</a></br>
      <a href= "users/view_admins.php?login=<?php echo $login;?>"> View All Admins</a></br>
      <a href= "users/add_admin.php?login=<?php echo $login;?>"> Add New Admin</a></br>
      <a href= "users/view_customers.php"> Delete User</a></br>
    </div>
  </div>
</body>
</html>

<?php include('headers/admin_footer.php'); ?>
