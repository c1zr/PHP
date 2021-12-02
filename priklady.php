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
    
    echo "<table border=1>";
    $cisloPrikladu = 0;
    while ($cisloPrikladu <= 20)
    {
        $cislo1 = rand(1, 10);
        $cislo2 = rand(1, 10);

        $cisloOperatoru = rand(0, 1);
        if($cisloOperatoru == 0)
        {
            $vysledek = $cislo1 + $cislo2;
            $operator = "+";
        }
        else{
            $vysledek = $cislo1 - $cislo2;
            $operator = "-";
        }

        if ($vysledek >= 1 && $vysledek <=10)
        {
            echo "<tr><td>$cislo1 $operator $cislo2 =</td></tr>";
		    $cisloPrikladu++;
        }
    }

    ?>
</body>
</html>