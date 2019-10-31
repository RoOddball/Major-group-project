<?php


class FightCard
{
    public $EventName;
    public $Date;


    public $fighterRed = "red corner fighter";
    public $fighterBlue = "blue corner fighter";
    public $venue = "where the event is taking place";
    public $result = "result of fight";





    public function DisplayClickableEvents($qryResult,$fightCard)
    {

        if (mysqli_num_rows($qryResult) > 0)
        {
            while($row = mysqli_fetch_assoc($qryResult)) {
                echo '<a href="index.php?eventid='.$row['EventName'].'">'.$fightCard->EventName = $row["EventName"]
                        .": " .$row['Fight'].'</a>';
                echo " <br>";
                echo $fightCard->Date = $row['Date'];
                echo "<br>";
                echo "<br>";
            }
        }
    }



    public function SelectFighter($qryResult,$aFightCard)
    {

        if (mysqli_num_rows($qryResult) > 0)
        {
            while($row = mysqli_fetch_assoc($qryResult)) {


                echo
                    '<a href="index.php?fighterid='.$row['FighterRed'].'">'
                    .$aFightCard->fighterRed=$row['FighterRed'] . '</a>'. "  VS. ". '<a href="index.php?fighterid='.$row['FighterBlue'].'">'
                            .$aFightCard->fighterBlue = $row['FighterBlue'] .'</a>'. " Result: ". $aFightCard->result = $row["Result"]. " ".
                                '<a href="index.php?action=predictor">'. "Pre-fight prediction". '<br>';
            }
        }
    }



}