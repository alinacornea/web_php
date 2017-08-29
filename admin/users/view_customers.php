<?php
include('../headers/admin_header.php'); ?>
?>

<link rel="stylesheet" type="text/css" href="../style_admin/users.css">
<table  border = "5" >
  <tr align = "center">
    <td colspan = "10"><h2>View All Users</h2></td>
  </tr>
  <tr id="name">
    <td>Id</</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Phone</td>
    <td colspan="3">Email</td>
    <td>Login</td>
    <td></td>
    <td></td>
  </tr>
  <?php
    include ("../../shared/initialize.php");
    $get_user = "select * from Users";
    $run_user = mysqli_query($conn, $get_user);
    $i = 0;
    while ($row_user = mysqli_fetch_array($run_user))
    {
      $user_id = $row_user['id'];
      $user_first = $row_user['first_name'];
      $user_last = $row_user['last_name'];
      $user_phone = $row_user['phone'];
      $user_email = $row_user['email'];
      $user_login = $row_user['login'];
      $i++;
  ?>
  <tr id="info">
    <td><?php echo $i;?></td>
    <td align= "center"><b><?php echo $user_first;?></b></td>
    <td align= "center"><b><?php echo $user_last;?></b></td>
    <td><?php echo $user_phone;?></td>
    <td colspan="3"><?php echo $user_email;?></td>
    <td><?php echo $user_login;?></td>
    <td><a href = "modify_user.php?modify_user=<?php echo $user_id; ?>">Edit User</a></td>
    <td><a href = "delete_user.php?delete_user=<?php echo $user_id;?>">Delete User</a></td>
  </tr>
<?php } ?>
</table>
<?php
  include('../headers/admin_footer.php'); ?>
?>
