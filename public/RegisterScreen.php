<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style> @import "css/background.css";
    </style>
</head>

<body>
<h1>Register</h1>

<form action="RegisterScreen.php" method="POST" >

    <label for = "firstname"> Enter Username:</label>
    <input type="text" name = "username" id = "firstname" placeholder = "Username" required>

    <label for = "password"> Enter Password:</label>
    <input type="password" name = "password" id ="password" placeholder = "Password" required>
    <input type="submit" id = "submit" value="Register" >

</form>



<?php

require_once __DIR__ . '/../src/User.php';

$newUser = new User();
$newUser->Register();



?>




</body>
</html>