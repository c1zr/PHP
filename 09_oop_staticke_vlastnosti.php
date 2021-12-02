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

class Clovek
{
    static $pocetLidiNaSvete = 0;

    function __construct()

    {
    // navyseni lidi na svete
    Clovek::$pocetLidiNaSvete++;    
    }
}

$adam = new Clovek();
$eva= new Clovek();

echo "Pocet lidi na svete:".Clovek::$pocetLidiNaSvete;


    ?>
</body>
</html>