<?php
$dekuji = null;
// pokud uzivatel u nas jeste nikdy nebyl tak
// mu vytvorime cookie s hodnotou 1
if (array_key_exists("pocitadlo", $_COOKIE) == false)
{
	// uzivatel u nas nikdy nebyl
	setcookie("pocitadlo", "1", strtotime("+1 year"));
	$_COOKIE["pocitadlo"] = 1;
}
else
{
	// uzivatel vracejici se
	// zvedneme pocitadlo o 1
	setcookie("pocitadlo", $_COOKIE["pocitadlo"] + 1, strtotime("+1 year"));
	$_COOKIE["pocitadlo"]++;
}
if ($_COOKIE["pocitadlo"] == 10)
{
	$dekuji = "Děkuji za věrnost";
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
	blabla
	<?php
	echo $dekuji;
	?>
</body>
</html>