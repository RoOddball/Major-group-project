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



<h1>Home Page</h1>
<!-- navigation bar -->
<ul>

    <li><a href="DisplayRankings.php">Rankings</a></li>
    <li><a href="DisplayArchive.php">Archive</a></li>
    <li><a href="AdminTool.php">Admin Tool</a></li>
    <li><a href ="LogoutScreen.php">Logout</a></li>
</ul>

<form action="DisplaySearchResult.php" method="post">
    <input type="text" name="search" placeholder="UFC event / Fighter">
    <input type="submit" name="submit"></input>
</form>

<p>

</p>
<h3>
    Upcoming Fights:
</h3>


<?php

if ($_SESSION["regularUser"] == false) {
    header("Location: DisplayError.php");
}

    include "../config/DatabaseConfig.php";
    include "../src/Session.php";

//Build Query
    $sql = "SELECT * FROM Event where HasTakenPlace = false order by date asc ";
    $qryResult = mysqli_query($conn, $sql);

    $session = new Session();
    $session->SelectFightCard($qryResult, $session);


    mysqli_close($conn);

?>


</body>
</html>