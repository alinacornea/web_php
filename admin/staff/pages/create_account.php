<?php require_once('../../initialize.php'); ?>

<?php include('../../shared/header.php'); ?>

<html>
<title>Create_account</title>
<link rel="stylesheet" media= "all" href ="<?php echo url_from_public("public/stylesheets/create_account.css") ; ?> "/>
<body>
  <h2> Create account form: </h2>
    <form action="action.php"style="border:2px solid #ccc" method="post">
  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value= "" required />

    <label><b>Login</b></label>
    <input type="text" placeholder="Enter Login" name="login" value="" required />

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="passwd" value="" required/>

    <label><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="pssswd-repeat" value="" required/>
    <input type="checkbox" checked="checked"> Remember me
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit" class="signupbtn"  name="submit" value="Sign Up"/>
  </div>
</form>
</body>
</html>

<?php include('../../shared/footer.php'); ?>
