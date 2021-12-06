<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $badass = "Matysek";
    $pokemon = "Charizard";


    //vytvoreni pole 
    $pole = ["Pricenzna Zvejka", 
            "Pes Matysek", 
            "Nejlepsi Bulbasaur",
            $badass,
            $pokemon,
            "Dalsi cast pole",
            "A jeste jedna",
            "ok, lol",
            ];


    unset($pole[3]); //odeberu z pole polozku s indexem 3
    $pole = array_values($pole); //tady rikam, ze chci pocitat cele polo znvu a vyradit chzbejici [3].
    // $xx = array_filter($xx) znamena, ze odfiltruje vsechny prazdne hodnoty
    // $xx = array_values(array_filter($xx)); lepsi udelat takhle

    
    
            for ($i = 0; $i < count($pole); $i++)
            {
                echo "<p> $pole[$i] </p>";
            }

            for ($i = 20; $i > 0; $i -= 5){
                echo "<p> $i </p>";
            }
    
    
    
    
    
    
    ?>

</body>
</html>