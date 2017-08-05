
<?php

function auth($login, $passwd)
{
  $pass =  hash('whirlpool', $passwd);
  $check = unserialize(file_get_contents("private/passwd"));
  foreach($check as $value)
  {
    if ($value['login'] === $login && $value['passwd'] === $pass)
      return TRUE;
  }
  return FALSE;
}

// require_once('../../../admin/initialize.php');
// $login = $_POST['login'];
// $pass = $_POST['passwd'];
//
// if ($_POST['submit'] === "SUBMIT")
// {
// 		$hash = hash('whirlpool', $pass);
// 		if (!file_exists("private"))
// 		{
//       mkdir("private", 0777, true);
//       $unserialize = array(array('login'=>$login, 'passwd'=>$hash));
//     }
//     else
//     {
//       $check = file_get_contents("private/passwd");
//       $unserialize = unserialize($check);
//       foreach($unserialize as $value)
//       {
//         if ($value['login'] == $login)
//         {
//           echo "This login already exists\n";
//           return ;
//         }
//       }
//       $unserialize[] = array('login'=>$login, 'passwd'=>$hash);
//     }
//     $convert = serialize($unserialize);
//     file_put_contents("private/passwd", $convert);
//     echo "Your login and password was created!\n";
// }
// else {
//   echo "Submit your login and password!\n";
//
// }

if (auth($login, $pass) == TRUE)
{
  $_SESSION['loggued_on_user'] = $login;
  echo "You logged in succesfully! Welcome\n";
}
else
{
  $_SESSION['loggued_on_user'] = "";
  echo "Incorect login or password, try again!\n";
}
?>
