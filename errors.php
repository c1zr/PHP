<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>php funsies</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php

		// ulozime hodnoty do premennych
		$item_count = 5;
		$item_price = 350;

		// vynasobime ich a vysledok ulozime do premennej $sum
		$sum = $item_count * $item_price;

		// premennu $sum vypiseme na stranku
		// cize na stranke sa objavi cislo
		echo $sum;

		$cislo1 = 2;
		$cislo2 = 2;

		echo "<br>";
		echo "<br>";

		if( $cislo1 > $cislo2){
			echo "Cislo jedna je vetsi";
		}elseif($cislo2 > $cislo1){
			echo "Cislo dva je vetsi";
		}else{
			echo "cisla se rovnaji";
		}

		echo "<br>";
		echo "<br>";

		$text1 = "Ss";
		$text2 = "M";

		if(strlen($text1) > strlen($text2)){
			echo "text 1 je vetsi nez text 2";
		}elseif(strlen($text1) < strlen($text2)){
			echo "text 2 je vetsi nez text 1";
		}else{
			echo "texty jsou stejne dlouhe";
		}


		echo "<br>";
		echo "<br>";



		$number = 5;
		$min 	= 5;

		if( $number >= $min ) {
			echo $number,' je vetsi nebo rovný minimu';
		}
		else {
			echo $number,' je menší jako minimum';
		}

	?>


</body>
</html>