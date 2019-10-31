
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

    <li><a href="index.php?action=rankings">Rankings</a></li>
    <li><a href="index.php?action=archive">Archive</a></li>
    <li><a href ="index.php?action=logout">Logout</a></li>
</ul>

<form action="index.php?action=search" method="post">
    <input type="text" name="search" placeholder="UFC event / Fighter" required>
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

//display events
$sql = "SELECT * FROM Event where HasTakenPlace = false order by date asc ";
$qryResult = mysqli_query($conn, $sql);

//make events clickable
$fightCard = new FightCard();
$fightCard->DisplayClickableEvents($qryResult, $fightCard);





mysqli_close($conn);

?>


</body>
<footer>
    Denas, Andrei, Joe - 2019 All rights Reserved &copy;
</footer>

</html>
