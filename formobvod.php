<?php
$obvod = null;
$chyba = null;
$polomer = null;
if (array_key_exists("submit", $_GET))
{
	$polomer = $_GET["polomer"];
    $polomer = str_replace(",", ".", $polomer);
	//echo $polomer;
	if ($polomer == "")
	{
		$chyba = "Musí být vyplněno";
	}
    else if(is_numeric($polomer) == false)
    {
        echo "Musi byt cislo";
    }
    else if($polomer <= 0)
    {
        echo "Musi byt kladne cislo";
    }
	else
	{
		// pocitat pouze pokud nenastala chyba
		$obvod = $polomer * pi() * 2;
	}
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
		Poloměr: <input type="text" name="polomer" placeholder="Zadej poloměr. " value="<?php echo $polomer ?>">
		<?php
		echo $chyba;
		?>
		<button name="submit">Vypočítat</button>
	</form>
	<?php
	if ($obvod != null)
	{
		echo "<h2>Obvod kruhu je: $obvod</h2>";
	}
	?>
</body>
</html>