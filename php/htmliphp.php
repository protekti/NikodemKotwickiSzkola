<!DOCTYPE html>
<html>
    <head>
        <title>PHP + HTML + CSS</title>
        <style>
            :root {
                --grubosc-ramki: 1px;
                --wielkosc-padding: 10px;
            }
            * {
                padding: var(--wielkosc-padding);
                text-align: center;
            }
            #calosc {
                width: 80%;
                margin-left: auto;
                margin-right: auto;
            }
            #logo {
                background-color: blue;
                min-height: 100px;
                color: white;
            }
            #lewa {
                border: 1px solid yellow;
                background-color: rgb(100, 100, 200);
                min-height: 100px;
                width: calc(
                    33.33333333% - var(--wielkosc-padding) * 2 - var(--grubosc-ramki) * 2;
                );
                float: left;
            }
            #srodek {
                background-color: #a6edb9;
                min-height: calc(100px+2px);
                width: calc(33.3333333% - 20px);
                float: left;
            }
            #prawa {
                background-color: pink;
                height: 100px;
                width: calc(33.3333333% - 20px);
                min-height: calc(100px + 2px);
                float: left;
                overflow: auto;
            }
            #dol {
                background-color: lightblue;
                min-height: 100px;
                clear: both;
            }
        </style>
    </head>
    <body>
        <div id="calosc">
            <div id="logo">
                <h1>Moja Strona</h1>
            </div>
            <div id="lewa">
                <?php
                    $a=rand(1,100);
                    echo $a;
                ?>
            </div>
            <div id="srodek">
                <?php
                    $b=rand(1,100);
                    echo $b;
                ?>
            </div>
            <div id="prawa">
                <?php
                    $c=rand(1,100);
                    echo $c;
                    echo "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores enim fugiat deleniti similique porro ea. Accusantium, doloribus obcaecati. Vel repudiandae minus perspiciatis voluptate consequuntur officiis quis aperiam! Neque, fugiat harum!"
                ?>
            </div>
            <div id="dol" style="background-color: red">
                <?php
                    $suma = $a+$b+$c;
                    echo "sqrt($a+$b+$c)=".sqr($suma) ."<br>"; echo "$a+$b+$c = $suma";
                    echo $b;
                ?>
            </div>
        </div>
    </body>
</html>