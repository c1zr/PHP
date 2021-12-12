<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background: grey;
            color: yellow;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <?php
    
    $radky = 20;

    for($i = 1; $i <= $radky; $i++){
        $tmp ="";
        for($j = 1; $j <= $i; $j++){
            $tmp .= " * ";
        }
        echo "$tmp<br>";
    }



    ?>
</body>
</html>