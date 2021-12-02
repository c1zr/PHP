<?php
$jmeno = null;
$vek = null;
$pohlavi = null;
$chyby = [];
$ok = false;
if (array_key_exists("odeslat", $_POST))
{
	$jmeno = $_POST["jmeno"];
	$vek = $_POST["vek"];
	$pohlavi = $_POST["pohlavi"];

	// validace
	// kontrola jmena
	if ($jmeno == "")
	{
		$chyby["jmeno"] = "Musí být vyplněno";
	}
	else if (mb_strlen($jmeno) < 3)
	{
		$chyby["jmeno"] = "Musí být alespoň 3 znaky";
	}

	// kontrola veku
	if ($vek == "")
	{
		$chyby["vek"] = "Musí být vyplněno";
	}
	else if (!is_numeric($vek))
	{
		$chyby["vek"] = "Musí být číslo";
	}
	else if ($vek < 18)
	{
		$chyby["vek"] = "Registrace pouze pro dospělé";
	}
	else if ($vek > 150)
	{
		$chyby["vek"] = "Registrace pouze pro neželvy";
	}

	// kontrola pohlavi
	if ($pohlavi == "")
	{
		$chyby["pohlavi"] = "Zvolte si pohlaví";
	}
	else if ($pohlavi != "zena")
	{
		$chyby["pohlavi"] = "Registrace pouze pro ženy";
	}

	// vse ok?
	// pokud je pole s chybama prazdne tak je vse v cajku
	if (count($chyby) == 0)
	{
		$ok = true;
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
	<?php
	if ($ok == false)
	{
		?>
		<form method="post">
			Jméno: <input
				type="text"
				name="jmeno"
				placeholder="Alespoň 3 znaky"
				value="<?php echo $jmeno ?>"
				>
			<?php
			// vypiseme chybu pouze pokud existuje
			if (array_key_exists("jmeno", $chyby))
			{
				echo $chyby["jmeno"];
			}
			?>
			<br>

			Věk: <input
				type="text"
				name="vek"
				placeholder="Napiš číslo"
				value="<?php echo $vek ?>"
				>
			<?php
			// vypiseme chybu pouze pokud existuje
			if (array_key_exists("vek", $chyby))
			{
				echo $chyby["vek"];
			}
			?>
			<br>

			Pohlaví:
			<select name="pohlavi">
				<option value="">Vyberte</option>
				<option value="muz" <?php if ($pohlavi == "muz") {echo "selected";} ?> >Muž</option>
				<option value="zena" <?php if ($pohlavi == "zena") {echo "selected";} ?> >Žena</option>
				<option value="genderfluid" <?php if ($pohlavi == "genderfluid") {echo "selected";} ?> >Genderfluid</option>
			</select>
			<?php
			// vypiseme chybu pouze pokud existuje
			if (array_key_exists("pohlavi", $chyby))
			{
				echo $chyby["pohlavi"];
			}
			?>
			<br>

			<button name="odeslat">Odeslat</button>
		</form>
		<?php
	}
	else
	{
		echo "Formulář byl úspěšně odeslán";
	}
	?>
</body>
</html>