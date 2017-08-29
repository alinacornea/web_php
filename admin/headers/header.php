<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Vintage - store </title>
  <link rel="icon" href="/web_php/public/images/rose.png"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/web_php/public/front_style/header.css">
</head>

<body>
    <header>
      <h1>
        <a title="Home"href="<?php echo ("$base_url/web_php/public/index.php?login=$login") ;?>"> <img id="home" src="/web_php/public/images/home.png" alt="Home"></a>
        <svg >

    <!-- Gradient -->
        <radialGradient id="gr-radial"
                    cx="100%" cy="100%" r="100%">
      <animate attributeName="r"
               values="0%;100%;100%;0%"
               dur="3s" repeatCount="indefinite" />
      <stop stop-color="#FFF" offset="0">
        <animate attributeName="stop-color"
                 values="#FFF;#FF0;#FF0;#FFF"
                 dur="5s" repeatCount="indefinite" />
      </stop>
      <stop stop-color="rgba(250, 180, 150, 2)" offset="100%"/>
    </radialGradient>

    <!-- Text -->
    <text text-anchor="middle"
          x="50%"
          y="50%"
          dy=".20em"
          class="text"
          >
      Vintage Store
    </text>
  </svg>
        <a title="Cart" href="/web_php/public/display/view_cart.php"> <img id="cart" src="/web_php/public/images/if_cart.png" alt="Cart"></a>
        <a title="Admin" target="_blank" href="/web_php/admin/users/admin_login.php"><img id="admin" src="/web_php/public/images/secure.png" alt="Admin"></a>
        <a title="Logout" href="/web_php/admin/users/logout.php"><img id="logout" src="/web_php/public/images/button.png" alt="Logout"></a>
        <a title="Login" href="/web_php/admin/users/login.php"> <img id="login"src="/web_php/public/images/login1.png" alt="Login"></a>
      </h1>
    </header>
