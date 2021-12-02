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

    $mesta = [
        "Praha" => [
            "pocetObyvatel" => 1000000,
            "rokZalozeni"   => 1478,
            "primator"      => "Hrib",
            "obyvatele"     => ["Petr", "Pavel"],
        ],
        "Brno" => [
            "pocetObyvatel" => 400000,
            "rokZalozeni"   => 5478,
            "primator"      => "Vanova",
            "obyvatele"     => ["Jan", "Roman"],
        ],
    ];

    

    echo"Primator v Praze: ";
    echo $mesta["Praha"] ["primator"];

    echo "Prvni clovek v Praze: ";
    echo $mesta ["Praha"] ["obyvatele"] [0];

    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Mesto</th>";
    echo "<th>Pocet obyvatel</th>";
    echo "<th>Rok zalozeni</th>";
    echo "</tr>";

    foreach($mesta as $mesto => $infoOmestu)
    {
        echo "<tr>
             <td>$mesto</td>       
             <td>{$infoOmestu ["pocetObyvatel"]}</td>
             <td>{$infoOmestu ["rokZalozeni"]}</td>
             </tr>";
    }

    echo "</table>";

    ?>
</body>
</html>