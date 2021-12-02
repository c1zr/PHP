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
    // vypiste datum velikonoc v pristim roce
    $pristiRok = date('Y') + 1;
    $timestampVelikonoc = easter_date($pristiRok);
    echo date("j.n.Y", $timestampVelikonoc);
    echo "<br>";
    // vse v jednom prikazu
    echo date("d. F Y", easter_date(date("Y") + 1));
?>
</body>
</html>