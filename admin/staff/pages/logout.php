<?php
session_start();
session_unset();
session_destroy();
$msg = "You are logged out succesfuly!";
echo "<script> alert('$msg');location.href = 'http://localhost:8080/alcornea2/web_store/admin/staff/index.php'; </script>";
exit();
?>
