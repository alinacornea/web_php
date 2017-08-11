<?php
function url_for_admin($script_path)
{
  if ($script_path[0] != '/'){
    $script_path = "/" . $script_path;
  }
  $path = WWW_ROOT . $script_path;
  return $path;
}

function url_from_public($script_path)
{
  if ($script_path[0] != '/'){
    $script_path = "/" . $script_path;
  }
  $path = WWW_PUBLIC . $script_path;
  return $path;
}


function u($string=""){
  return urlencode($string);
}

function raw_u($string=""){
  return rawurlencode($string);
}

function h($string="")
{
  return htmlspecialchars($string);
}


// function error_404(){
//   header($_SERVER["SERVER_PROTOCOL"] "404 Not Found");
//   exit(1);
// }

?>
