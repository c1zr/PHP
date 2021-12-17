<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$oblibeneVeci = [
    "homer" => "kobliha",
    "marge" => "trouba",
    "bart" => "prak",
    "liza" => "kniha",
    "meggie" => "dudlik",
];

echo "Homer ma rad: " .$oblibeneVeci['homer'];

$batoh = ['provaz', 'svítilna', 'peněženka'];

$batoh2 = [
    0 => "provaz",
    1 => "svitilna",
    2 => "penezenka",
];

print_r($batoh);
print_r($batoh2);


?>
</body>
</html>