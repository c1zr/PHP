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
// zjisteni aktualniho casu ve forme timestampy (pocet sekund od 1970)
$aktualniTimestamp = time();
var_dump($aktualniTimestamp);
// zjisteni timestampy pro pristi rok
$aktualniTimestamp = strtotime("+1 year");
// prevedeni timestampy na citelny format
$datum = date("j.n.Y G:i:s", $aktualniTimestamp);
echo $datum;

echo "<br>";

$cislo = 12345.6789;
echo round($cislo, 2); // zaokrouhleni na 2 desetinna mista
echo "<br>";

// zformatovani cisla podle danych parametru
echo number_format($cislo, 3, ",", " ");
echo "<br>";

$slovo = "čapí";
echo strlen($slovo);
echo "<br>";
echo mb_strlen($slovo);
echo "<br>";

$veta = "čapí hnízdo";
// vypsat prvních 5 znaků
echo substr($veta, 0, 5);
echo "<br>";
echo mb_substr($veta, 0, 5);
// funkce s prefixem mb_ pracuji se znaky nikoliv s bajty = 
// lepsi pro praci s texty pokud je napr. rezame apod...



?>
</body>
</html>