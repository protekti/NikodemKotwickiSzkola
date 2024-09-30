<html>
    <head>
        <title>Szukanie Liczby</title>
        <style>
            #calosc {
                width: 80%;
                color: white;
            }
            #pierwsza {
                background-color: red;
                height: 100px;
                width: 40%;
                float: left;
                text-align: center;
                vertical-align: middle;
                line-height: 100px;
            }
            #druga {
                background-color: blue;
                height: 100px;
                width: 40%;
                float: left;
                text-align: center;
                vertical-align: middle;
                line-height: 100px;
            }
            #trzecia {
                background-color: green;
                height: 100px;
                width: 40%;
                float: left;
                clear: both;
                text-align: center;
                vertical-align: middle;
                line-height: 100px;
            }
            #czwarta {
                background-color: black;
                color: white;
                height: 100px;
                width: 40%;
                float: left;
                text-align: center;
                vertical-align: middle;
                line-height: 100px;
            }
        </style>
    </head>
    <body>
        <div id="calosc">
            <section id="pierwsza">
                <?php
                    $xx=$_GET['x'];
                    echo "Liczba X: ".$xx;
                ?>
            </section>
            <section id="druga">
                <?php
                    $t = 0;
                    while(rand(1,100) != $xx){
                        $t+=1;
                    }
                    echo "Zajeło ".$t." prób aby znaleść liczbę ".$xx;
                ?>
            </section>
            <section id="trzecia">&nbsp;</section>
            <section id="czwarta">&nbsp;</section>
        </div>
    </body>
</html>