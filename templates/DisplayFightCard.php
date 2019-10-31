
<!html doctype>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>UFC World</title>

    <style>
    </style>
</head>

<body>



<h1>Fight Card</h1>
<!-- navigation bar -->

<ul>
    <li><a href="index.php?action=home">Home page</a></li>
</ul>
<p>



</p>

<?php


include "../config/DatabaseConfig.php";
require_once "../src/FightCard.php";


//Build Query
$eventid = $_GET['eventid'];
$sql = "SELECT * FROM event where EventName = '$eventid'";
$qryResult = mysqli_query($conn, $sql);

$aFightCard = new FightCard();



if (mysqli_num_rows($qryResult) > 0)
{
    if($row = mysqli_fetch_assoc($qryResult)) {


        echo $aFightCard->eventName = $row["EventName"].'<br>'.
            "Venue: ". $aFightCard->venue = $row["Venue"]. '<br>'."Date: ". $aFightCard->date=$row["Date"].
                    '<br>'.
                    '<br>';
    }
}




//Build Query
//$fighterid = $_GET['fighterid'];
$sql2 = "SELECT * FROM FightCard where EventName = '$eventid'";
$qryResult2 = mysqli_query($conn, $sql2);

//$aFightCard2 = new FightCard();

$aFightCard->SelectFighter($qryResult2,$aFightCard);

mysqli_close($conn);
?>

</body>
</html>