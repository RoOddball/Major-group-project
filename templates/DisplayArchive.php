
<!html doctype>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>UFC World</title>

    <style>
    </style>
</head>

<body>



<h1>Archive</h1>
<!-- navigation bar -->

<ul>
    <li><a href="index.php?action=home">Home page</a></li>
</ul>

<form action="DisplaySearchResult.php" method="post">
    <input type="text" name="search" placeholder="MMA event / Fighter">
    <input type="submit" name="submit"></input>
</form>
<p>

</p>

<h3>
    Past Events:
</h3>

<?php



include "../config/DatabaseConfig.php";
require_once "../src/FightCard.php";

//Build Query
$sql = "SELECT * FROM event WHERE HasTakenPlace is true order by date asc";
$qryResult = mysqli_query($conn, $sql);

//$archiveCard = new FightCard();

if (mysqli_num_rows($qryResult) > 0)
{
    while($row = mysqli_fetch_assoc($qryResult)) {
        echo '<br>'.'<a href="index.php?eventid='. $row['EventName'].'">'.$row["EventName"]
            .": " .$row["Fight"].'</a>'.
            '<br>'. $row['Date'];
    }
}



mysqli_close($conn);
?>


</body>
</html>