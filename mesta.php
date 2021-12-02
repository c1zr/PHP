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

    $mesta = ["Praha", "Brno", "Olomouc"];
    echo"<table border=1>";
    echo"<tr>";
    echo"<th>Mesta</th>";
    
    foreach($mesta as $klic => $mesto)
    {
        echo"<tr>";
        echo"<td>$mesto</td>";
        echo"</tr>";
        
    }
    echo"</table>";
  
    ?>
</body>
</html>