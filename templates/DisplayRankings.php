<!html doctype>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>UFC World</title>

    <style>
    </style>
</head>

<body>



<h1>Rankings</h1>
<!-- navigation bar -->
<ul>
    <li><a href="index.php?action=home">Home page</a></li>
</ul>

<p>

</p>

P4P Rankings
<p>

</p>


<?php
include "../config/DatabaseConfig.php";


//Build Query
$sql = "SELECT * FROM Fighter where P4Prank is not null order by p4prank asc ;";
$qryResult = mysqli_query($conn, $sql);



if (mysqli_num_rows($qryResult) > 0)
{
    while($row = mysqli_fetch_assoc($qryResult)) {
        echo
            $row['P4Prank'].
            ": ".
            '<a href="index.php?fighterid='.$row['Name'].'">'
            .$row['Name'].
            '<br>'.'</a>';
        '<br>';
    }
}



mysqli_close($conn);
?>

<p>

</p>
Heavyweight rankings
<p>

</p>





<?php

include "../config/DatabaseConfig.php";


//Build Query
$sql = "SELECT * FROM Fighter where weightclass = 'heavyweight' order by weightclassrank asc;";
$qryResult = mysqli_query($conn, $sql);


if (mysqli_num_rows($qryResult) > 0)
{
    while($row = mysqli_fetch_assoc($qryResult)) {
        echo
            $row['WeightclassRank'].
            ": ".
            '<a href="index.php?fighterid='.$row['Name'].'">'.$row['Name'].'<br>'.'</a>';
        '<br>';
    }
}



mysqli_close($conn);
?>












</body>
</html>