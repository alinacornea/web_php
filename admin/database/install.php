<?php require_once('../../shared/initialize.php');?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "web_store";

// Check connection
$conn = mysqli_connect($servername, $username, $password);
echo "<br/>";
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo '<p1 style="color: white;">Connected successfully</p1>';
echo "<br/>";

// DataBase creation

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
echo "<br/>";
if (mysqli_query($conn, $sql)) {
    echo '<p1 style="color: white;">Database created successfully</p1>';
} else {
    echo '<p1 style="color: white;">Error creating database: </p1>' . mysqli_error($conn);
}
echo "<br/>";

// Check connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<br/>";

// Set Products Table
$sql = "CREATE TABLE IF NOT EXISTS Products (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
title VARCHAR(50) NOT NULL,
category VARCHAR(50) NOT NULL,
description TEXT NOT NULL,
img_path CHAR(255) NOT NULL,
price INT(6) NOT NULL,
quantity INT,
year INT,
availability INT(1)
)";

// Check table creation
echo "<br  />";
if (mysqli_query($conn, $sql)) {
    echo '<p1 style="color: white;">Table Products created successfully</p1>';
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
echo "<br  />";

$sql = "CREATE TABLE IF NOT EXISTS Categories(
  cat_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
  cat_title VARCHAR(50) NOT NULL
)";

$insert_cat = "ALTER TABLE Categories ADD UNIQUE INDEX(cat_title)
INSERT IGNORE INTO Categories(cat_title) values('Art'), ('Accesories'), ('Books'), ('Decorative'), ('Furniture'), ('Rugs'), ('Timepieces'), ('WallDecor')";
$insert_pro = mysqli_query($conn, $insert_cat);

echo "<br  />";
if (mysqli_query($conn, $sql)) {
    echo "Table CATEGORIES created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
echo "<br  />";


// // Set User Table
// $sql = "CREATE TABLE IF NOT EXISTS Users (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
// userip VARCHAR(50) NOT NULL,
// first_name VARCHAR(50) NOT NULL,
// last_name VARCHAR(50) NOT NULL,
// email VARCHAR(100) NOT NULL,
// password VARCHAR(100) NOT NULL,
// phone VARCHAR(50) NOT NULL,
// hash VARCHAR(32) NOT NULL,
// is_active INT(1)
// )";

// Check table creation
// echo "<br  />";
// if (mysqli_query($conn, $sql)) {
//     echo "Table Products created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }
// echo "<br  />";

?>
