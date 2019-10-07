<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style> @import "css/background.css";
    </style>
</head>

<body>

<h1>Login</h1>


<form action="LoginScreen.php" method="POST" >

    <label for = "username"> Enter Username:</label>
    <input type="text"  name = "username" id = "username" placeholder = "Username" required>

    <label for = "password"> Enter Password:</label>
    <input type="password" name = "password" id ="password" placeholder = "Password" required>
    <input type="submit" id = "submit" value="Login" >

</form>







<?php
include "../src/User.php";


$aUser = new User();
$aUser->Login();


?>




</body>
</html>