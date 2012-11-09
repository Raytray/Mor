<!-- http://www.codingmix.com/2010/10/creating-full-php-login-system-very.html -->
<?php
session_start();
?>
<html>
<head>
</head>

<body>
<form action="login.php" method="post"><br />
<b style="font-size:150%;">Log in</b><br />
Username: <input type="text" name="username"/><br />
Password: <input type="password" name="password"/><br />
<input type="submit" value="Log in"/>

Don\'t have an account?

</form>
<form action="register.php" method="post"><br/>
<b style="font-size:150%;">Register</b><br/>
Username: <input type="text" name="username"/><br/>
Password: <input type="password" name="password"/><br/>
Retype password: <input type="password" name="retype-password"/><br />
<input type="submit" value="Register" />
</form> 
<?php }
else{
echo 'Welcome'.$_SESSION["username"]. '<br /> <a href="logout.php">Log out</a>';
}?>
</body>
</html>
