<?php
if (array_key_exists("odeslat", $_POST))
{
	$telefon = $_POST["telefon"];

	$ok = preg_match("/^(\\+420)?[1-9][0-9]{8}$/", $telefon);

	if ($ok)
	{
		echo "<h1>$telefon vypadá jako telefon</h1>";
	}
	else
	{
		echo "<h1>$telefon NEvypadá jako telefon</h1>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Telefoni cislo: <input type="text" name="telefon">
        <button name="odeslat">Odeslat</button>
    </form>
</body>
</html>