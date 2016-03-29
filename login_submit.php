<?php
require('logAccess.php');

$name = "Credentials";
$parameters = $_POST["login"].':'.$_POST["password"];
$login = base64_encode($parameters);

logAccess($name, $parameters);

setcookie("SessionID", $login, $httponly=true);

if ( $_POST["login"] == "jdoe" && $_POST["password"] == "Password1") {

	header('Location: game.php');

} else {
	echo '
	<!DOCTYPE html>
	<html>
	<head>
   		<link rel="stylesheet" href="/_css/main.css">
	</head>
	<body>
		<center>
		<br><br><br>
		<h1>Error</h1>
		Incorrect Password.
		<br>Click <a href="./login.php">here</a> to try again
		</center>
	</body>
	</html>';
}
?>
