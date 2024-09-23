<?php
    if(isset($_GET['x']) || !isset($_GET['y']))
    {
        echo "Brak parametru x lub y";
        exit();
    }
    if(empty($_GET['x']) || empty($_GET['y']))
    {
        echo "Brak wartości parametru x lub y";
        exit();
    }
    $xx=$_GET['x'];
    $yy=$_GET['y'];

    echo "x=$xx y=$yy<br>";
    echo "$xx+$yy".($xx+$yy)."<br>";
    echo "$xx-$yy".($xx-$yy)."<br>";
    echo "$xx*$yy".($xx*$yy)."<br>";
    echo "$xx/$yy".($xx/$yy)."<br>";
    echo "$xx%$yy".($xx%$yy)."<br>";
?>
