<!html doctype>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <title>UFC World</title>
    <style>
    </style>
</head>

<body>



<h1>Search Result</h1>
<!-- navigation bar -->
<ul>
<li><a href="index.php?action=home">Home page</a></li>
</ul>
<p>



</p>

<?php


include "../config/DatabaseConfig.php";


$search_value= mysqli_real_escape_string($conn,$_POST["search"]);
//Build Query

$sql = "SELECT * FROM Fighter where Name like '%$search_value%'";
$qryResult = mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM event where eventname like '%$search_value%'";
$qryResult2 = mysqli_query($conn, $sql2);



if (mysqli_num_rows($qryResult) > 0 && $search_value != null)
{
    while($row = mysqli_fetch_assoc($qryResult))
    {
        echo '<a href="index.php?fighterid='.$row['Name'].'">'
            .$row['Name'].
           '<br>'. '</a>';
    }

}
else if (mysqli_num_rows($qryResult2) > 0 && $search_value != null)
{
    while($row2 = mysqli_fetch_assoc($qryResult2))
    {
        echo '<a href="index.php?eventid='.$row2['EventName'].'">'
            .$row2['EventName']. ": ". $row2["Fight"].'<br>'.
        '</a>';
    }

}

else
{
    echo "No results were found for what you're looking for!";
}

mysqli_close($conn);

?>













</body>
</html>