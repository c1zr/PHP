<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #bada55;
            font-size: 1.5em;
        }

        li {
            list-style: none;
        }
    </style>
</head>
<body>
    <?php 
    $badass = "Matysek";


    //vytvoreni pole 
    $pole = ["Pricenzna Zvejka", 
            "Pes Matysek", 
            "Nejlepsi Bulbasaur",
            $badass];

            //necham vypsat cele pole do seznamu
            echo "<ul>";
            foreach($pole as $klic => $hodnota){
                echo "<li>$hodnota</li>";
            }
            echo "</li>";


            echo "<br>";
            echo "<br>";
            echo "<br>";

            //cyklus while 
            while($pole){
                echo array_pop($pole);
                if($pole) echo "<span> / </span>";
            }
    ?>
</body>
</html>