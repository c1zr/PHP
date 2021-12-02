<?php
$velikost = 10;
if (array_key_exists("odeslat", $_GET))
{
	$velikost = $_GET["velikost"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<form method="get">
	Velikost: <input type="text" name="velikost">
	<button name="odeslat">Odeslat</button>
</form>
<br>
<a href="?velikost=10&odeslat=">10x10</a>
<a href="?velikost=20&odeslat=">20x20</a>
<a href="?velikost=30&odeslat=">30x30</a>
<br>
<?php
    echo"<br>";
    echo "<table border=1>";
    // horizontalni hlavicka tabulky
    echo "<tr>";
    // prazdna bunka vlevo nahore
    echo "<th></th>";
    for ($zahlavi = 1; $zahlavi <= $velikost; $zahlavi++)
    {
        echo "<th>$zahlavi</th>";
    }
    echo "</tr>";

    // obsah tabulky
    for ($radek = 1; $radek <= $velikost; $radek++)
    {
        echo "<tr>";
        // vertikalni hlavicka tabulky
        echo "<th>$radek</th>";
        for ($sloupec = 1; $sloupec <= $velikost; $sloupec++)
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