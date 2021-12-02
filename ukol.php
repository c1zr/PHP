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
    $polomer = rand(1, 30);
    echo "<h1>Poloměr: $polomer</h1>";

    $obvod = 2 * pi() * $polomer;

    $zaokrouhlenyObvod = round($obvod, 1);
    echo "Obvod: $zaokrouhlenyObvod";
?>

</body>
</html>