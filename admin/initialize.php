<?php
$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define ("WWW_ROOT", $doc_root);

require_once('functions.php');
?>
