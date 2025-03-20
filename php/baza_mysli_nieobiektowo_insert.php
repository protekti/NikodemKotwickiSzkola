<?php
//wszystkie zapytania oprócz select
$pol=mysqli_connect("localhost","root","","liczby");
if(mysqli_connect_errno())
{
echo "UWAGA błąd połączenia:".mysqli_connect_error();
exit();
}
$z="INSERT INTO dane(nazwa, wartosc) VALUES ('siesdfdsdem',755)";
$w=mysqli_query($pol,$z);
mysqli_close($pol);
echo "Dane wstawione do bazy";

?>