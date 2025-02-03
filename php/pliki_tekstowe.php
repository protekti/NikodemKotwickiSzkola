<?php
$c = 200;
$plik = fopen("liczby.txt", "w+");
fputs($plik, "linia pierwsza\n");
fputs($plik, "linia druga\n");
fputs($plik, $c."\n");


echo "<br>Odczyt pliku linia po linii<br>";
$plik = fopen("liczby.txt", "r");
while(!feof($plik))
{
    $linia = fgets($plik);
    echo $linia."<br>";
}
fclose($plik);

echo "<br>Odczyt pliku znak po znaku<br>";
$plik = fopen("liczby.txt", "r");
while($znak = fgetc($plik))
{
    echo $znak;
    if($znak=="\n") echo "<br>";
}
fclose($plik);

echo "<br><br>Odczyt całego pliku<br>";
$plik = fopen("liczby.txt", "r");
$c = file_get_contents("liczby.txt");
echo $c;
?>