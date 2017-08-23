<?php require_once('../../shared/initialize.php');?>
<?php include('../headers/admin_header.php'); ?>
<?php require_once('../../shared/install.php');?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title> Vintage - manage items </title>
	</head>
<body>
	<div class = "main_wrapper">
			<div id = "right">
			<!-- <h2 style = "text-align: center; color: white; font-family: Georgia"> Manage Content: </h2> -->
				<a href= "index.php?add_product"> Insert New Product</a></br>
				<a href= "index.php?view_all"> View All Product</a></br>
				<a href= "index.php?view_categories"> View All Categories</a></br>
				<a href= "index.php?view_customers"> View Customers</a></br>
      </div>
			<div id = "left">
				<?php
				if (isset($_GET['add_product']))
					include("add_product.php");
				if (isset($_GET['view_all']))
					include("view_all.php");
				if (isset($_GET['edit_product']))
					include ("edit_product.php");
				if (isset($_GET['view_categories']))
					include ("view_categories.php");
				if (isset($_GET['insert_cat']))
					include ("insert_cat.php");
				if (isset($_GET['edit_category']))
					include ("edit_category.php");
				?>
			</div>
    </div>
</body>
</html>
<?php include('../headers/admin_footer.php'); ?>
