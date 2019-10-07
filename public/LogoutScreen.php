<?php
session_start();
?>
<!html doctype>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>UFC World</title>
    <style> @import "css/background.css";
        @import "css/NavBar.css";
    </style>
</head>

<body>
<ul>

    <li><a href="FirstScreen.php">First Screen</a></li>
</ul>


<h1>You have successfully logged out</h1>
<?php
if ($_SESSION["regularUser"] == true ||$_SESSION['adminUser'] == true ) {
    session_destroy();
}
else {
    header("Location: DisplayError.php");
}
?>