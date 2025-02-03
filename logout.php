<?php


//limpar cookies
setcookie("PHPSESSID", "", time() - 3600, "/");

//limpar sessão
$_SESSION = array();
session_destroy();
header("Location: index.php");
exit();
