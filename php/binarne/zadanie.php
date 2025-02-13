<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie z plikami binarnymi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Montserrat", serif;
        }
        div{
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        button{
            background-color: green;
            color: white;
            border-radius: 50%;
            border: none;
            padding: 5%;
        }
    </style>
</head>
<body>
    <div id="sekcja1">
        <h1 style="font-weight: 900; font-size: 5vh;">Pliki binarne</h1>
        <h3 style="font-weight: 300;">Nikodem Kotwicki 2GPM</h3>
    </div>
    <div id="sekcja2" style="top: 40%;">
        <h2>Wybór Programu</h2>
        <input type="submit" class="button" name="skrypt1" value="skrypt1" style="font-family: Montserrat;"/>
        <input type="submit" class="button" name="skrypt2" value="skrypt2" style="font-family: Montserrat;"/>
        <input type="submit" class="button" name="reset" value="reset" style="font-family: Montserrat;"/>
    </div>
    <div id="sekcja3" style="top: 60%">
        <h2>Wynik</h2>
        <iframe src="" frameborder="0" id="iframe"></iframe>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.button').click(function(){
                var clickBtnValue = $(this).val();
                if(clickBtnValue == "skrypt1"){
                    document.getElementById("iframe").src = "losuj.php";
                } else if(clickBtnValue == "skrypt2"){
                    document.getElementById("iframe").src = "odczyt.php";
                } else{
                    document.getElementById("iframe").src = "";
                }
            });
        });
    </script>
</body>
</html>