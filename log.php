<?php include("loginconn.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Css/loginstyle.css">
</head>
<body>
    <div id="loginbox">
        <h1>Login Here</h1>
        <form action="#" method="POST">
            <p>Ph No.</p>
            <input type="text" name="number" placeholder="Enter Phone number">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <a href="register.php">Don't have an account? Sign Up now</a>
            <input type="submit" name="login" value="Login"> 
        </form>
    </div>
</body>
</html>