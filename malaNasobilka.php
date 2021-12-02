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

        echo "<table border=1>";
        echo"<tr>";
        echo"<th></th>";
        for ($zahlavi = 1; $zahlavi <=10; $zahlavi++)
        {
            echo"<th>$zahlavi</th>";
        }
        echo"</tr>";
        for ($radek = 1; $radek <= 10; $radek++)
        {
            echo "<tr>";
            echo"<th>$radek</th>";
            for ($sloupec = 1; $sloupec <= 10; $sloupec++)
            {
                $vysledek = $sloupec * $radek;
                echo "<td>$vysledek</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>