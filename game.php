<?php
require('logAccess.php');

$name = "Game";
$parameters = "";

logAccess($name, $parameters);

 
if ( $_COOKIE["SessionID"] == "amRvZTpQYXNzd29yZDE=") {

echo '
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="/_css/main.css">
</head>
<body>
<center>
Game Success!!!!
<br><a href="./logout.php" class="btn">Logout</a>
</center>
</body>
</html>';
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
Access not Authorized.
<br>Click <a href="./login.php">here</a> to login
</center>
</body>
</html>';
}
?>
