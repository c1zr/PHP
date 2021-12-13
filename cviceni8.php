<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }

        p {
            display: inline;
        }
    </style>
</head>
<body>
    <?php 
    
    $cislo = 6;
    if($cislo % 2 === 0){
        for ($i=1; $i <= $cislo; $i++) { 
            echo "<ul><li>$i. hodnota</li></ul>";
        }
    }else{
        echo "Zadane cislo musi byt sude";
    }


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



    $cislo = 12;
    if($cislo % 2 === 0){
        for ($i=1; $i < $cislo; $i++) { 
            echo "<p>$i-</p>";
            
        }
        echo "$cislo";
    }else{
        echo "Zadane cislo musi byt sude";
    }




    
    ?>
</body>
</html>