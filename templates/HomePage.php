
<!html doctype>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>UFC World</title>
    <style>



    </style>


</head>

<body>

<?php
print 'You are logged in as: ' . $_SESSION["usernameEntered"].'.';
?>


<h1>Home Page</h1>
<!-- navigation bar -->
<ul>

    <li><a href="DisplayRankings.php">Rankings</a></li>
    <li><a href="DisplayArchive.php">Archive</a></li>
    <li><a href="AdminTool.php">Admin Tool</a></li>
    <li><a href ="index.php?action=logout">Logout</a></li>
</ul>

<form action="DisplaySearchResult.php" method="post">
    <input type="text" name="search" placeholder="UFC event / Fighter">
    <input type="submit" name="submit"></input>
</form>

<p>

</p>
<h3>
    Upcoming Events:
</h3>


<?php


include "../config/DatabaseConfig.php";
include "../src/FightCard.php";

//Build Query
$sql = "SELECT * FROM Event where HasTakenPlace = false order by date asc ";
$qryResult = mysqli_query($conn, $sql);

$fightCard = new FightCard();
$fightCard->SelectFightCard($qryResult, $fightCard);


mysqli_close($conn);

?>


</body>
<footer>
    Denas, Andrei, Joe - 2019 All rights Reserved &copy;
</footer>

</html>