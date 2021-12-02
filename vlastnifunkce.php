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
        function obvodKruhu($polomer)
        {
            $obvod = 2 * pi() * $polomer;
            //vratime jako vysledek funkce vypocitany obvod
            return $obvod;
        }

        //zkouska zavolani nasi funkce
        $vysledek = obvodKruhu(5);
        echo $vysledek;







        echo "<br>";
        function cenaSDPH($cenaBezDph, $sazba)
        {
           return $cenaSDPH = $cenaBezDph / 100 *$sazba + $cenaBezDph; 
        }
        echo cenaSDPH(100, 12);
        echo "<br>";

       
        
        
        
        
        
        
        
        
        function cnaf($celsia)
        {
           return $c = $celsia * 9 / 5 + 32;
        }
        echo cnaf(1);
        
        echo "<br>";












        function fnac($farh)
        {
           return $f = ($farh -32) / (9 / 5 );
        }
        echo fnac(1)

        

    ?>
</body>
</html>