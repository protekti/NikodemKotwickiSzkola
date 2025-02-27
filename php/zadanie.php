<?php
    if(!isset($_POST['wiek'])){
        echo "Formularz nie został prawidłowo wysłany";
        exit();
    }
    if(empty($_POST['wiek'] || empty($_POST['nazwisko']))){
        echo "Brak danych";
        exit();
    }
    
    if(isset($_POST['obecny'])) $obecny=$_POST['obecny'];
    else $obecny='nie zaznaczono';
    if(isset($_POST['plec'])) $plec=$_POST['plec'];
    else $obecny='nie zaznaczono';

    $wiek = $_POST['wiek'];
    $nazwisko = $_POST['nazwisko'];
    $kolor = $_POST['kolor'];
    $opis = $_POST['opis'];
    echo "Wiek=$wiek<br>Nazwisko=$nazwisko<br>Kolor=$kolor<br>Opis=$opis<br>Obecny=$obecny<br>Plec=$plec";
?>