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
    //vyjdete z ukolu 2 a rozsirte tridu Auto o konstruktor, tak aby se pri vytvareni objektu aut, dala rovnou zadat znacka
    //rokVyroby a vybava
    

    class Auto
{
    public $znacka;
    public $rokVyroby;
    public $doplnky;

    function __construct($znacka, $rokVyroby,$doplnky)
    {
        echo"Bylo vyrobeno auto";
        $this->rokVyroby=0;
        $this->znacka = $znacka;
        $this->rokVyroby = $rokVyroby;
        $this->doplnky = $doplnky;
    }

    function stariVozu ()
    {
        //promenna $this odkazuje na ten objekt kteremu
        // byla tato funkce volana
        return date('Y')-$this->rokVyroby;
    }

    
}


$alfaromeo = new Auto("alfaromeo","1999",["klimatizace","bar"]);
$ducati = new Auto("ducati","2011",["volant", "brzdy"]);

//$alfaromeo->znacka = ;
//$alfaromeo -> rokVyroby =;
//$alfaromeo -> doplnky = ;

//$ducati ->znacka = ;
//$ducati ->rokVyroby = ;
//$ducati -> doplnky = ;

//var_dump($alfaromeo);
//var_dump($ducati);

$auta = [$alfaromeo,$ducati];
var_dump($auta);


//vypis roku vyroby prvniho auta v poli
echo $auta [0]->rokVyroby;

echo "<table border=1>";
echo     "<tr> <th>Znacka</th> 
            <th>Rok výroby</th>
            <th>Doplnky</th>
            <th>Stari vozu v letech</th> 
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
            <td>{$auto->stariVozu()}</td>

        </tr>";
}

echo "</table>"; 
    ?>
</body>
</html>