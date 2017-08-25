<?php require_once('../../shared/initialize.php'); ?>

<?php include('../headers/header.php'); ?>

<html>
<title>Create_account</title>
<link rel="stylesheet" media= "all" href ="../style_admin/register.css"/>
<body>
  <h2> Registration form: </h2>
    <form id = "board" action="action.php" method="post">
  <div class="container">
    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="first" value= "" required />

    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="last" value= "" required />

    <label><b>Phone number</b></label>
    <input type="text" placeholder="Enter Phone (XXX) XXX-XX-XX" name="phone" value="" required />

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value= "" required />

    <label><b>Login</b></label>
    <input type="text" placeholder="Enter Login" name="login" value= "" required />

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password     Note: password must include at least 1 digit and 1 capital letter" name="passwd" value="" required/>

    <!-- <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pssswd" value="" required/> -->
    <!-- <input type="checkbox" checked="checked"> Remember me -->
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit" class="signupbtn"  name="submit" value="Create an account"/>
  </div>
</form>
</body>
</html>

<?php include('../headers/footer.php'); ?>
