<?php
require('logAccess.php');

$name = "Logout";
$parameters = "";

logAccess($name, $parameters);

setcookie("SessionID", "");

header('Location: login.php');

?>
