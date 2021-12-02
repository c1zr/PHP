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
    $polomery = array();
    // cyklem naplnime pole
    //for ($i = 1; $i <= 20; $i++)
    while (count($polomery) < 20)
    {
        $polomer = rand(1, 30);
        // pridame polozku do pole, pouze pokud jeste v poli
        // neni
        if (!in_array($polomer, $polomery))
        {
            $polomery[] = $polomer;
        }
    }
    var_dump($polomery);

    echo "<table border=1>";
    echo "<tr> <th>Poloměr</th> <th>Obvod</th> </tr>";
    foreach ($polomery as $index => $polomer)
    {
        $obvod = round(2 * pi() * $polomer, 1);
        echo "<tr> <td>$polomer</td> <td>$obvod</td> </tr>";
    }
    echo "</table>";
?>
    
</body>
</html>