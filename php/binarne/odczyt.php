<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Montserrat", serif;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    $plikb=fopen("wylosowane.dat", "rb");
    $yy=fread($plikb, filesize("wylosowane.dat"));
    echo "<center>Odczytano Liczby: $yy</center>";
    fclose($plikb);
?>