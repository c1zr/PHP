<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .modra {
            background-color: blue;
            color: #fff;
        }

        .zelena {
            background-color: green;
            color: #fff;
        }

        .cervena {
            background-color: red;
            color: #fff;
        }
    </style>
</head>
<body>


<?php




echo "<table border=1>";
echo "<tr>
		<th>C</th>
		<th>F</th>
	</tr>";
for ($stupneC = -100; $stupneC <= 100; $stupneC = $stupneC + 10)
{
	$stupneF = $stupneC * 9 / 5 + 32;
    if ($stupneC < 0)
    {
        $barva = 'modra';
    }
    else if ($stupneC == 0)
    {
        $barva = 'zelena';
    }
    else if ($stupneC > 0)
    {
        $barva = 'cervena';
    }

    if ($stupneF < 0)
    {
        $barvaF = 'modra';
    }
    else if ($stupneF == 0)
    {
        $barvaF = 'zelena';
    }
    else if ($stupneF > 0)
    {
        $barvaF = 'cervena';
    }

	echo "<tr> <td class=$barva>$stupneC</td><td class=$barvaF>$stupneF</td> </tr>";
}
echo "</table>";
?>


    
</body>
</html>