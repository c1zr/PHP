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

        //$mesice = array("leden", "unor", "brezen");
        $mesice = ["leden", "unor", "brezen"];

       var_dump($mesice);

       echo"Druhy mesic v roce je ";
       echo $mesice [1];


       //prodani polozky do pole
       $mesice [] = "duben";
       $mesice [] = "kveten";
       $mesice [] = "cerven";
       var_dump($mesice);

       //odebirani polozek 

       unset($mesice[1]);
       var_dump($mesice);


       //prochazeni pole pro kazdou polozku

       foreach($mesice as $klic => $mesic)
       {
           echo "$klic mesic v roce je $mesic <br>";
       }

    ?>
</body>
</html>