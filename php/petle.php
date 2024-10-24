<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<br>".rand(1,30)."<br>";
        echo "<br>";
        $a = 10;
        echo $a++."<br>";
        echo $a."<br>";
        for($i=1;$i<11;$i++){
            if($i==5) continue;
            echo "$i ";
        }
        echo "<br>";
    ?>
    <?php
        $i = 1;
        do{
            echo"$i ";
            $i++;
            if($i==7) break;
        } while($i<11);
        echo "<br>";
        $i=1;
        while($i<11){
            echo "$i ";
            $i++;
        }
        echo "<br>";
        $tablica = ['a', 'b', 'c', 'd']
        foreach($tablica as $klucz){
            echo "$klucz ";
        }
        echo "<br>";
        $licby[1]=100;
        $licby[20]=1200.9;
        $licby[300]=2;
        var_dump($licby);
        echo "<br>";
        for($i=0;$i<301;$i++){
            if(isset($liczby[$i])) echo $licby[$i]." ";
        }        
    ?>
</body>
</html>