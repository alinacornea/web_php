<?php
require_once('functions.php');
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/admin') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define ("WWW_ROOT", $doc_root);

$public = strpos($_SERVER['SCRIPT_NAME'], '/public') + 20;
$root = substr($_SERVER['SCRIPT_NAME'], 0, $public);
define ("WWW_PUBLIC", $root);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "web_store";
global $conn;
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno())
  echo "Failed to connect to MySQL: " . mysql_connect_error();
?>
