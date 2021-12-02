<?php
require "04knihovna.php";

$stupneC = null;
$stupneF = null;
if (array_key_exists("cNaF", $_GET))
{
	// pocitame z C na F
	$stupneC = $_GET["stupneC"];
	$stupneF = cNaF($stupneC);
}
else if (array_key_exists("fNaC", $_GET))
{
	// pocitame z F na C
	$stupneF = $_GET["stupneF"];
	$stupneC = fNaC($stupneF);
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
		C: <input type="text" name="stupneC" value="<?php echo $stupneC ?>">

		<button name="cNaF"> --> </button>
		<button name="fNaC"> <-- </button>

		F: <input type="text" name="stupneF" value="<?php echo $stupneF ?>">
	</form>
</body>
</html>