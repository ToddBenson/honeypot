<?php
$ip = getenv ('REMOTE_ADDR');
$date=date("j F, Y, g:i a");;
$referer=getenv ('HTTP_REFERER');
$agent=getenv ('HTTP_USER_AGENT');
$fp = fopen('data.txt', 'a');
fwrite($fp, '****Comment: ' .$_POST["comment"]. ' Agent: ' .$agent. ' IP: ' .$ip. ' Date and Time: ' .$date. ' Referer: '.$referer."\n");
fclose($fp);
?>
<html>
<body>
<center>
<br><br><br>
<h3>Thank you</h3>
<br>Click <a href="./login.php">here</a> to return
</center>
</body>
</html>
