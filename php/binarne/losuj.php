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
    $random_number_array = range(1, 100);
    shuffle($random_number_array );
    $random_number_array = array_slice($random_number_array ,0,10);
    $string_version = implode(', ', $random_number_array);
    $plikb=fopen("wylosowane.dat", "w+b");
    fwrite($plikb, $string_version);
    fclose($plikb);
    echo "<center>Wylosowano i zapisano w trybie binarnym: $string_version</center>";
 ?>