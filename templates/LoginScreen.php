

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
    </style>
</head>

<body>
<h1>Login</h1>


<form action="index.php?action=processLogin" method="POST" >

    <input  type="hidden" name="action" value="processLogin">

    <label for = "username"> Enter Username:</label>
    <input type="text" name = "username" id = "username" placeholder = "Username" required>
    <br>
    <label for = "password"> Enter Password:</label>
    <input type="password" name = "password" id ="password" placeholder = "Password"  required>
    <br>
    <input type="submit" name = "registerBut"  >

</form>


