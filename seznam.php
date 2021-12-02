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

    $lidi = ["Jan", "Petr", "Radek", "Dan"];
    echo"<ol>";
    

    foreach($lidi as $lide)
    {
        echo"<li>$lide</li>";
    }
    echo"</ol>";

    ?>
</body>
</html>