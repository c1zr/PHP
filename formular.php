<?php
echo "<h1>_GET</h1>";
var_dump($_GET);

echo "<h1>_POST</h1>";
var_dump($_POST);

echo "<h1>_REQUEST</h1>";
var_dump($_REQUEST);

// pokud nam prijde klic odeslat v poli POST tak byl
// formular odeslan
if (array_key_exists("odeslat", $_POST))
{
	echo "Formulář byl odeslán";

	$jmeno = $_POST["jmeno"];
	$vek = $_POST["vek"];
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

	<form method="post">
		Jméno: <input type="text" name="jmeno">
		<br>

		Věk: <input type="number" name="vek">
		<br>

		<input type="submit" name="odeslat" value="Odeslat">
		<button name="odeslat">Odeslat</button>
	</form>

</body>
</html>