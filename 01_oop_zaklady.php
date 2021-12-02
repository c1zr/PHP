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
$produkt = array (
    "cena"=>123,
    "nazev"=>"Chleba",
);

//nadefinujeme tridu jak ma vypadat kazdy produkt

class Produkt
{
    public $cena;
    public $nazev;
}

// vytvoteni produktu

$pivo = new Produkt ();

//nastaveni vlastnosti objektu
$pivo->cena = 40;
$pivo->nazev= "Plzen";
var_dump ($pivo);

$chleba = new Produkt();
var_dump ($chleba);

    ?>
</body>
</html>