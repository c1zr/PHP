<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CVICENI6</title>
</head>
<body>
    <?php

    $data = [
        [
            "title" => "The World's End",
            "genre" => "Sci-fi",
            "year"  => 2013,
            "gross" => 26004851
        ],
        [
            "title" => "Scott Pilgrim vs. the World",
            "genre" => "Sadness",
            "year"  => 2010,
            "gross" => 31524275
        ],
        [
            "title" => "Hot Fuzz",
            "genre" => "Buddy Cop",
            "year"  => 2007,
            "gross" => 23637265
        ],
        [
            "title" => "Shaun of the Dead",
            "genre" => "Zombie",
            "year"  => 2007,
            "gross" => 13542874
        ],
    ];
    $cislo = 0;
    $celkovaSuma =0;
    echo "<table>";
    echo "<tr><th>Title</th><th>Genre</th><th>Year</th><th>Gross</th></tr>";
    foreach($data as $radek){
        $cislo++;
        if($cislo % 2 === 0){
            $barva = "";
        }else{
            $barva = " class=odd";
        }
        $trzba = number_format($radek['gross'], 0, '.', ',');
        echo "<tr$barva><td> $radek[title]</td><td>$radek[genre]</td><td>$radek[year]<td> $ $trzba</td></td></tr>";
        $celkovaSuma = $celkovaSuma + $radek['gross'];
    }
    $celkovaSuma =  number_format($celkovaSuma, 0, '.', ',');
    echo "<tr><th></th><th></th><th></th><th>$ $celkovaSuma </th></tr>";
    echo "</table>";



    ?>



</body>
</html>