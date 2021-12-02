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

class produkt
{
    public $nazev;
    public $cena; //cena bez dph
    public $sazbaDph; //v %

    function cenaSDPH ()
    {
        //promenna $this odkazuje na ten objekt kteremu
        // byla tato funkce volana
        return $this->cena * (1+$this->sazbaDph/100);
    }
}

$produkt1 = new Produkt();
$produkt1 ->nazev = "Máslo";
$produkt1 ->cena = 40;
$produkt1 ->sazbaDph=15;

echo "Cena produktu s DPH";
echo $produkt1->cena * (1+$produkt->sazbaDph/100);



?>

</body>
</html>