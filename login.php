<?php
require('logAccess.php');

$name = "Login";
$parameters = "";

logAccess($name, $parameters);

?>
<!DOCTYPE html>
<html>

    <head>
        <title> Personal VPN </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Security-Policy" content="default-src 'none'; script-src 'self'; style-src 'self'; report-uri http://159.203.255.227/collector/csp_parser.php"> 
        <link rel="stylesheet" href="_css/main.css">
</head>


    <body>
        <div class="container">
            <center>
   	    <br><br>
	    <h2>WARNING:<br>AUTHORIZED ACCESS ONLY</h2>
		<p class="notice">This site is for personal use only.
	    <div class="login-block">
	    <h1>Login</h1>
            <form action="login_submit.php" method="post">
                <input type="text" name="login" value="" id="login" placeholder="Username" size="32" />
                <br />
                <input type="password" name="password" value="" placeholder="Password" id="password" size="32" autocomplete="off" />
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
