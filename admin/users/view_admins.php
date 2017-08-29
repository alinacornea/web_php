<?php
include('../headers/admin_header.php'); ?>
?>
<div style= "overflow-x:auto;">
<link rel="stylesheet" type="text/css" href="../style_admin/users.css">
<table  border = "5" >
  <tr align = "center">
    <td colspan = "10"><h2>View All Admins</h2></td>
  </tr>
  <tr id="name">
    <td>Id</</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td colspan="3">Email</td>
    <td>Login</td>
    <td>Status</td>
    <td></td>
    <td></td>
  </tr>
  <?php
    include ("../../shared/initialize.php");
    $login = $_GET['login'];
    $get_admin = "select * from Admins";
    $run_admin = mysqli_query($conn, $get_admin);
    $i = 0;
    while ($row_admin = mysqli_fetch_array($run_admin))
    {
      $admin_id = $row_admin['id'];
      $admin_first = $row_admin['first_name'];
      $admin_last = $row_admin['last_name'];
      $admin_email = $row_admin['email'];
      $admin_login = $row_admin['login'];
      $i++;
  ?>
  <tr id="info">
    <td><?php echo $i;?></td>
    <td align= "center"><b><?php echo $admin_first;?></b></td>
    <td align= "center"><b><?php echo $admin_last;?></b></td>
    <td colspan="3"><?php echo $admin_email;?></td>
    <td><?php echo $admin_login;?></td>
    <td><?php if($login== $admin_login) {echo "<font color='green'>active</font>";} else{echo "<font color='red'>not active</font>";}?></td>
    <td><a href = "modify_admin.php?modify_admin=<?php echo $admin_id;?>?login=<?php echo $login;?>">Edit Admin</a></td>
    <td><a href = "delete_admin.php?delete_admin=<?php echo $admin_id;?>?login=<?php echo $login;?>">Delete Admin</a></td>
  </tr>
<?php } ?>
</table>
<div>
<?php
  include('../headers/admin_footer.php'); ?>
?>
