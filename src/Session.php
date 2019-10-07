<?php
/**
 * Created by PhpStorm.
 * User: denas
 * Date: 27/03/2019
 * Time: 11:39
 */

class Session
{
    public $EventName;
    public $Date;

    public function SelectFightCard($qryResult,$session)
    {

        if (mysqli_num_rows($qryResult) > 0)
        {
            while($row = mysqli_fetch_assoc($qryResult)) {
                echo '<a href="DisplayFightCard.php?id='.$row['EventName'].'">'.$session->EventName = $row["EventName"]
                    .": " .$row['Fight'].'</a>';
                echo " <br>";
                echo $session->Date = $row['Date'];
                echo "<br>";
                echo "<br>";
            }
        }
    }

}