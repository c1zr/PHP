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
    //nadefinujte tridu auto s vlastnoma znacka a rok Vyroby.
    //Vyrobte 2 instance a nastavte jim nejake hodnoty vlastnosti.
    //Dejte ty 2 instance do pole a vypiste jako tabulku.

class Auto
{
    public $znacka;
    public $rokVyroby;
    public $doplnky;
}


$alfaromeo = new Auto();
$ducati = new Auto();

$alfaromeo->znacka = "alfaromeo";
$alfaromeo -> rokVyroby ="1999";
$alfaromeo -> doplnky = ["klimatizace","bar"];

$ducati ->znacka = "ducati";
$ducati ->rokVyroby = "2011";
$ducati -> doplnky = ["volant", "brzdy"];

var_dump($alfaromeo);
var_dump($ducati);

$auta = [$alfaromeo,$ducati];
var_dump($auta);


//vypis roku vyroby prvniho auta v poli
echo $auta [0]->rokVyroby;

echo "<table border=1>";
echo     "<tr> <th>Znacka</th> 
            <th>Rok výroby</th>
            <th>Doplnky</th> 
         </tr>";
foreach ($auta as $auto)
{

    echo "<tr>
            <td>$auto->znacka</td>
            <td>$auto->rokVyroby</td>
            <td><ol>";
    
    foreach ($auto->doplnky as $doplnek)
    {
        echo "<li>$doplnek</li>";
    }

    echo "</ol></td>
        </tr>";
}

echo "</table>"; 




    ?>
</body>
</html>