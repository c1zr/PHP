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

    $cislo = 1;

    while($cislo <= 6)
    {
        echo"<h$cislo>H$cislo<h$cislo>";
        $cislo++;
    }



   $mys = 2;
   $roky = 1;

   while($mys < 3000000)
   {
       $mys = $mys + ($mys * 4);
       $roky++;
   }


   echo $mys;
   echo "<br>";
   echo $roky;
   echo "<br>";

   echo"<table border=1>
            <tr>
                <td>Mysi</td>
                <td>$mys</td>
            </tr>
            <tr>
                <td>Roky</td>
                <td>$roky</td>
            </tr>
        </table>";
    ?>
</body>
</html>