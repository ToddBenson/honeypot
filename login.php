<?php
$ip = getenv ('REMOTE_ADDR');
$date=date("j F, Y, g:i a");;
$referer=getenv ('HTTP_REFERER');
$agent=getenv ('HTTP_USER_AGENT');
$fp = fopen('data.txt', 'a');
fwrite($fp, '****Login: Landing Agent: ' .$agent. ' IP: ' .$ip. ' Date and Time: ' .$date. ' Referer: '.$referer."\n");
fclose($fp);
?>
<html>

    <head>
        <title> Personal VPN </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Security-Policy" content="default-src 'none'; script-src 'self'; style-src 'self'; report-uri /collector/csp_parser.php"> 
        <link rel="stylesheet" href="./_css/main.css">
</head>


    <body>
        <div classs="container">
            <center>
   	    <br><br>
	    <h2>WARNING:<br>AUTHORIZED ACCESS ONLY</h2>
		<p class="notice">This site is for personal use only.
	    <div class="login-block">
	    <h1>Login</h1>
            <form action="login_submit.php" method="post">
                <input type="text" name="login" value="" id="login" placeholder="Username" size="32" />
                <br />
                <input type="password" name="password" value="" placeholder="Password" id="password" size="32" />
                <br />
                <input type="submit" name="submit" class="btn" id="submit_login" value="Submit" />
            </form>
            <form action="comments.php" method="POST">
                <h1>Contact Me</h1>
                <label for="comment">Leave a comment for me</label>
                <br />
                <textarea name="comment" id="comment" rows="4" columns="500"></textarea>
                <br />
                <br />
                <input type="submit" name="submit" class="btn" id="sumbit_login" value="Submit" />
            </form>
	</div>
    </body>
</html>
