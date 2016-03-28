<?php
$ip = getenv ('REMOTE_ADDR');
$date=date("j F, Y, g:i a");;
$referer=getenv ('HTTP_REFERER');
$agent=getenv ('HTTP_USER_AGENT');
$fp = fopen('data.txt', 'a');
fwrite($fp, '****GAME: Agent: ' .$agent. ' IP: ' .$ip. ' Date and Time: ' .$date. ' Referer: '.$referer."\n");
fclose($fp);

 
if ( $_COOKIE["SessionID"] == "amRvZTpQYXNzd29yZDE=") {

echo '
<html>
<head>
   <link rel="stylesheet" href="./_css/main.css">
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
<html>
<head>
   <link rel="stylesheet" href="./_css/main.css">
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
