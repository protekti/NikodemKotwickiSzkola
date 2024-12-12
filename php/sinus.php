<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2GPM</title>
</head>
<body>
    <?php 
        function formula($x, $y) {
            return number_format((float)sin($x)*$y, 2, '.', '');
        }
        $z = 255;
        echo formula(15, 20);
    ?>

    <table border="0">
        <tr>
        <th></th>
          <?php 
            $xList = array();
            for($i=0; $i<=20; $i++){
                $liczba = $i-10;
                echo "<th>$liczba</th>";
                $xList[$i] = $liczba;
            }
          ?>
        </tr>

        <?php 
            for($i=10; $i>=0; $i--){
                $liczba = $i-10;
                echo "<tr><th>$liczba</th>";
                for($i2=1; $i2>=-21; $i2--){
                    $calculated = formula($i2, $liczba);
                    $rgb = $calculated*100;
                    echo "<td style='background-color: rgb($rgb, $rgb, $rgb); color: red;'>".$calculated."</td>";
                }
            }
          ?>
      </table>
</body>
</html>
