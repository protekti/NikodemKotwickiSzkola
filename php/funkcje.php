<?php
function aaa(&$tablica){
    $tablica[1]=100;
}
function razydwa($a){
    $wynik=$a*2;
    return $wynik;
}
function mnozenie($a, $b, $c){
    return $a*$b*$c;
}
function cosTamLiczy(){
    return razydwa(3)*mnozenie(2,2,2);
}
function zmienNapis(&$napis){
    $napis = 'Ola ma kota';
    return "jakis tekst";
}
function licz($f, $a=400, $z=100){
    return $a+$z+$f;
}

$tab = array();
$tab[1]=200;
echo $tab[1]."<br>";
aaa($tab);
echo $tab[1]."<br>";

$f=150;
echo razydwa($f)*100;

echo "<br>".mnozenie(1,2,3);
echo "<br>".cosTamLiczy();

$a = "Ala ma kota";
echo "<br>".zmienNapis($a);
echo "<br>$a";

echo "<br>".licz(4,8);
echo "<br>".licz(7);
echo "<br>".licz(7,z:1);
?>