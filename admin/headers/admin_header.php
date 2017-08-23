

<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Vintage - store </title>
  <link rel="icon" href="http://localhost:8080/ecommerce/public/images/rose.png"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="http://localhost:8080/ecommerce/admin/style_admin/admin_page.css">
</head>

<body style="background-color:white;">
    <header>
      <h1>
        <a title="Home"href="<?php echo ("http://localhost:8080/ecommerce/public/index.php?login=$login") ;?>"> <img id="home" src="http://localhost:8080/ecommerce/public/images/home.png" alt="Home"></a>
        Vintage - Admin page
        <a title="Logout" href="http://localhost:8080/ecommerce/admin/users/logout.php"><img style="float:right;margin-right:30px;padding:10px;width:60px;height:60px;" src="http://localhost:8080/ecommerce/public/images/logout.png" alt="Logout"></a>
      </h1>
    </header>

    <navigation>
      <ul>
        <li> <a href="<?php echo ("http://localhost:8080/ecommerce/admin/index.php?login=$login") ;?>" style="font-family: 'Tangerine', serif;
        font-size: 50px;color:white;"> Admin Home </a> </li>
      </ul>
    </navigation>
