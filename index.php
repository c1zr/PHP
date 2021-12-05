<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>fun times php</title>

	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>


    <?php
    

    $directors = [
    
    [
        'id' => 1,
        'first_name' => 'Edgar',
        'last_name' => 'Wright',
        'country' => 'United Kingdom',
        'birthdate' => '1974-04-18',
    ],
    
    [
        'id' => 2,
        'first_name' => 'Jim',
        'last_name' => 'Jarmusch',
        'country' => 'United States',
        'birthdate' => '1953-01-22',
    ],
    
    [
        'id' => 3,
        'first_name' => 'Leos',
        'last_name' => 'Carax',
        'country' => 'France',
        'birthdate' => '1960-11-22',
    ],
    
    [
        'id' => 4,
        'first_name' => 'Ingmar',
        'last_name' => 'Bergman',
        'country' => 'Sweden',
        'birthdate' => '1918-07-14',
    ],
    [
        'id' => 5,
        'first_name' => 'Andrej',
        'last_name' => 'Tarkovskij',
        'country' => 'Russia',
        'birthdate' => '2000-10-10',
    ],
];


echo '<pre>';
print_r( $directors );
echo '</pre>';


foreach ( $directors as $key => $value ) {
    echo "${value['first_name'] }" ;
    echo ' ';
    echo "${value['last_name'] }" ;
    echo '<br>';
};

echo '<br>';

//$i = $directors['id'];

for ( $i = 0; $i <= 5; $i++ ) {
    echo  $i;
    echo '<br>';
};

echo '<br>';

require 'dir.php';
while ($edo) {
    echo array_pop($edo);
    if ( $edo ) echo '<span> / </span>';
    echo '<br>';
};

echo '<br>';
//akosi nwm prist na while pri tomto komplikovanejsom zapise, dufam, ze toto postaci
//pri tom select-e poprosim komentar, ci to je dobre, ako funguje to, len nwm ci som dala dobry zapis 
?>
 
<div>


    <select name="choice">
    <?php require 'dir.php'?>
        <option $value='dir.php' selected>All directors</option>
        <option $value=<?php echo $edo['id']?>><?php echo $edo['first_name'], ' ', $edo['last_name']?></option>
        <option value=<?php echo $jim['id']?>><?php echo $jim['first_name'], ' ', $jim['last_name']?></option>
        <option value=<?php echo $leos['id']?>><?php echo $leos['first_name'], ' ', $leos['last_name']?></option>
        <option value=<?php echo $ing['id']?>><?php echo $ing['first_name'], ' ', $ing['last_name']?></option>
        <option value=<?php echo $ado['id']?>><?php echo $ado['first_name'], ' ', $ado['last_name']?></option>
    </select>
 
</div>


</body>
</html>