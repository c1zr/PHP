<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
$pocasi = array(
	"Praha" => array(
		"19.11.2021" => array(
			"teplota" => 5,
			"popis" => "zima",
		),
		"20.11.2021" => array(
			"teplota" => 6,
			"popis" => "teplo",
		),
		"21.11.2021" => array(
			"teplota" => 10,
			"popis" => "vedro",
		),
	),
	"Brno" => array(
		"19.11.2021" => array(
			"teplota" => 2,
			"popis" => "vic zima",
		),
		"20.11.2021" => array(
			"teplota" => 3,
			"popis" => "min teplo",
		),
		"21.11.2021" => array(
			"teplota" => 7,
			"popis" => "min vedro",
		),
	),
);

foreach ($pocasi as $mesto => $predpoved)
{
    echo"<h1> $mesto </h1>";
    echo "<table border=1>";
    echo "<tr>";
    echo"   <th> Datum </th>";
    echo"   <th> Teplota </th>";
    echo"   <th> Popis </th>";
    echo"</tr>";

    foreach ($predpoved as $datum => $predpovedProDen)
    {
        echo "<tr>
        <td>$datum</td>
        <td>{$predpovedProDen["teplota"]} </td>
        <td>{$predpovedProDen["popis"]}</td>
        </tr>";
}
    echo "</table>";
    }
?>
</body>
</html>