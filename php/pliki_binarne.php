<?php
    $a=5;
    $b=20;
    $c=123;

    $plikb=fopen("dane.dat", "w+b");
    fwrite($plikb, $a);
    fwrite($plikb, $b);
    fwrite($plikb, $c);
    fclose($plikb);

    $plikb=fopen("dane.dat", "rb");
    $xx=fread($plikb, 1);
    echo "Pozycja pliku dane.dat: ".ftell($plikb)."<br>";
    echo "$xx*2=".($xx*2)."<br>";
    fseek($plikb, 4);
    $yy=fread($plikb, 1);
    echo "yy=$yy<br>";
    fclose($plikb);

    for($j=0;$j<1000;$j++) $tab1[$j]=rand(1,1000);
    $a=serialize($tab1);
    echo $tab1[10];
    file_put_contents("tablica2.dat", $a);
    
    $tab2=unserialize(file_get_contents("tablica2.dat"));
    echo "<br>".$tab2[10];
?>