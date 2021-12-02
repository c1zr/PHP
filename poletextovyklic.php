<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


  $pocetObyvatelPodleMesta = ["Praha" => 1000000, "Brno" => 400000, "Olocouc" => 15];

    var_dump($pocetObyvatelPodleMesta);

    echo "Pocet obyvatel v Praze ";
    echo $pocetObyvatelPodleMesta["Praha"];
    
    $pocetObyvatelPodleMesta["Hradec"] = 1000;
    var_dump($pocetObyvatelPodleMesta);

    unset($pocetObyvatelPodleMesta["Praha"]);
    var_dump($pocetObyvatelPodleMesta);


    foreach($pocetObyvatelPodleMesta as $mesto => $pocetObyvatel)
    {
        echo"Pocet obyvatel v $mesto je $pocetObyvatel";
        echo"<br>";
    }




        $zvirata = array(
            "Koza" => 4,
            "Slepice" => 2,
            "Had" => 0,
            "Stonožka" => 100,
        );

        echo "<table border=1>";
        echo "<tr> <th>Zvíře</th> <th>Nohy</th> </tr>";
        foreach ($zvirata as $zvire => $nohy)
        {
            echo "<tr>
                <td>$zvire</td>
                <td>$nohy</td>
                </tr>";
        }
        echo "</table>";





    ?>
</body>
</html>