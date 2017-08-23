<?php require_once('../shared/initialize.php'); ?>
<?php include('headers/admin_header.php'); ?>

<html>
<title>Admin Area</title>
<link rel="stylesheet" type="text/css" href="style_admin/admin_page.css">
<body>
  <div class="dropdown"  >
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
      <a href= "users/view_customers.php"> View Customers</a></br>
      <a href= "users/add_admin.php"> Add new admin</a></br>
      <a href= "users/view_customers.php"> Modify data user</a></br>
      <a href= "users/view_customers.php"> Delete user</a></br>
    </div>
  </div>
</body>
</html>

<?php include('headers/admin_footer.php'); ?>


<!-- <div id="content">
<div id="main-menu">
<ul>
<li> <a id="items" href="/ecommerce/admin/database/index.php"> Manage items </a>
<li> <a id="items" href="/ecommerce/admin/users/manage_users.php"> Manage users </a>
</li>
</ul>
</div>
</div> -->
