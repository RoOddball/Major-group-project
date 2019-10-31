<!html doctype>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>UFC World</title>

    <style>
    </style>
</head>

<body>



<h1>Fighter</h1>
<!-- navigation bar -->

<ul>
    <li><a href="index.php?action=home">Home page</a></li>
</ul>
<p>



</p>

<?php


include "../config/DatabaseConfig.php";
require_once "../src/Fighter.php";


//Build Query
$fighterid = $_GET['fighterid'];
$sql = "SELECT * FROM Fighter where Name = '$fighterid'";
$qryResult = mysqli_query($conn, $sql);

$aFighter = new Fighter();

if (mysqli_num_rows($qryResult) > 0)
{

    while($row = mysqli_fetch_assoc($qryResult))
    {
        echo "Name: ". $aFighter->FighterName  = $row["Name"].
                '<br>'.
                "Weightclass: ".$aFighter->FighterWeightclass = $row["Weightclass"].
                    "(".$aFighter->WeightclassRank = $row["WeightclassRank"].")".
                        '<br>'.
                        "Height: ". $aFighter->Height = $row["Height"]." cm".
                            '<br>'.
                            "P4P rank: ". $aFighter->P4Prank = $row["P4Prank"].
                                "<br>".
                                "Nationality: " . $aFighter->Nationality = $row["Nationality"].
                                    '<br>'.
                                    "Record: " . $aFighter->Record = $row["Record"];
    }

}
else
{
    echo "Fighter not found in database.";
}

mysqli_close($conn);

?>













</body>
</html>