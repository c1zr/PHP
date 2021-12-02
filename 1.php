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
            "Praha" => ["Petr", "Pavel"],
            "Brno"  => ["Jirka", "Magda"],
        ];

        echo"<table border=1>";
        echo"<tr><th>Mesta</th> <th>Lide</th> </tr>";
        foreach($mesta as $mesto => $lide)
        {
            echo"<tr><td>$mesto</td><td><ul>";
            foreach($lide as $clovek)
            {
                echo"<li>$clovek</li>";
            }
            echo"</ul></td></tr>";
        }
        echo "</table>";

        

    ?>
</body>
</html>