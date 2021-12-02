<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
class Kasa
{
	protected $pocetPenez;

	function __construct()
	{
		$this->pocetPenez = 0;
	}
	function vlozit($castka)
	{
		$this->pocetPenez += $castka;
	}
	function vybrat($castka)
	{
		if ($castka < 0)
		{
			$chyba = new Exception("Zaporna castka");
			throw $chyba;
		}
		if ($this->pocetPenez >= $castka)
		{
			$this->pocetPenez -= $castka;
		}
		else
		{
			$chyba = new Exception("Neni dost penez");
			throw $chyba;
		}
	}
}

$pokladna = new Kasa();
var_dump($pokladna);

/*
$pokladna->pocetPenez += 100;
$pokladna->pocetPenez += 100;
var_dump($pokladna);

$pokladna->pocetPenez -= 500;
var_dump($pokladna);
*/

$pokladna->vlozit(100);
$pokladna->vlozit(100);
var_dump($pokladna);

try
{
	$pokladna->vybrat(500);
}
catch (Exception $chyba)
{
	// pokud nastala chyba
	echo $chyba;
}
var_dump($pokladna);

?>
</body>
</html>