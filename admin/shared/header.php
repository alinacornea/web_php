<?php
  if(!isset($page_title)) { $page_title = 'Admin menu'; }
?>
<!doctype html>

<html lang="en">

<head>
  <title>Vintage - <?php echo $page_title; ?> </title>
  <link rel="stylesheet" media= "all" href = "<?php echo url_for('/stylesheets/staff.css'); ?>"/>
  <meta charset="utf-8">
</head>

<body>
    <header>
      <h1> Vintage staff area: </h1>
    </header>
    <navigation>
      <ul>
        <li> <a href="<?php echo url_for('/staff/index.php'); ?>"> Menu </a> </li>
      </ul>
    </navigation>
