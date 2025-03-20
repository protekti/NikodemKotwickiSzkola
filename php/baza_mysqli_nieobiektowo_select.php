<?php
$pol=mysqli_connect("localhost","root","","liczby2");
if(mysqli_connect_errno())
{
    echo "UWAGA błąd połączenia:".mysqli_connect_error();
    exit();
}
$z="select * from dane2";
if($w=mysqli_query($pol,$z))
{
    echo "<br>Z bazy danych odczytano ".mysqli_num_rows($w)." rekordów";
    echo "<table border=2>";
    echo "<tr><th>NAZWA</th><th>WARTOSC</th><th>CENA</th></tr>";
    while($rekord=mysqli_fetch_assoc($w)) //mysqli_fetch_row($w) - tablica indeksowana
    {
        echo "<tr><td>".$rekord["nazwa"]."</td><td>".$rekord["wartosc"]."</td><td>".$rekord["cena"]."</td></tr>";
    }
    echo "</table>";
mysqli_free_result($w);
}
mysqli_close($pol);
?>