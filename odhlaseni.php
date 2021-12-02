<?php
session_start();

$uzivatele = array(
	"petr" => "heslo1",
	"honza" => "heslo2",
	"pavla" => "heslo3",
);
$chyba = null;

if (array_key_exists("prihlasit", $_POST))
{
	$jmeno = $_POST["jmeno"];
	$heslo = $_POST["heslo"];

	// kontrola zda-li uzivatel zadal platnou kombinaci
	if (array_key_exists($jmeno, $uzivatele) && $uzivatele[$jmeno] == $heslo)
	{
		// pokud uzivatel zadal spravne udaje, tak
		// si ulozime ze je prihlasen
		$_SESSION["uzivatel"] = $jmeno;
	}
	else
	{
		$chyba = "Nesprávné přihl. údaje";
	}
}


//zpracovani odhlaseni
if(array_key_exists("odhlasit", $_POST))
{
    unset($_SESSION["uzivatel"]);
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
	// zobrazit formular jenom kdyz uzivatel neni prihlasen
	// to pozname podle toho ze v poli _SESSION neni klic uzivatel
	if (array_key_exists("uzivatel", $_SESSION) == false)
	{
		?>
		<form method="post">
			Přihlašovací jméno: <input type="text" name="jmeno">
			<br>

			Heslo: <input type="password" name="heslo">
			<br>

			<button name="prihlasit">Přihlásit</button>
		</form>
		<?php
		echo $chyba;
	}
    else{
        //sekce pro prihlasene uzivatele 
        echo "Jsi přihlášen jako: ".$_SESSION["uzivatel"];

        echo "<form method='post'><button name='odhlasit'>Odhlasit</button></form>";
    }
	?>
</body>
</html>