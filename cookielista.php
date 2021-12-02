<?php
if (array_key_exists("souhlas", $_POST))
{
	setcookie("panel_souhlas", "1", strtotime("+1 year"));
	$_COOKIE["panel_souhlas"] = 1;

    
    // presmerujeme prohlizec, aby si prohlizec prestal myslet
	// ze poslednim krokem v historii je odeslani formulare
	// cimz dicilime toho ze pri refreshi ze znovu neodesle
	// odsouhlaseni
    header("location: ?");
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
	for ($i = 1; $i <= 1000; $i++)
	{
		echo "lorem ";
	}

	if (array_key_exists("panel_souhlas", $_COOKIE) == false)
	{
		?>
		<div class="lista">
			Sbirame a posilame o vas vsechny udaje do googlu
			<form method="post">
				<button name="souhlas">Plně souhlasím a nebyl na mne vyvíjen nátlak</button>
			</form>
		</div>
		<?php
	}
	?>

	<style>
		.lista {
			border: 20px solid red;
			position: fixed;
			top: 0;
			left: 5%;
			right: 5%;
			background: yellow;
			text-align: center;
			height: 50%;
		}
	</style>
</body>
</html>