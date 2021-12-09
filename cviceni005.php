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

        
    echo "<ul>";
    foreach($directors as $jmena){
        echo "<li>$jmena[first_name] $jmena[last_name]</li>";  
    }
    echo "</ul>";

    echo "<select>";
    foreach($directors as $jmena){
        echo "<option> $jmena[first_name] $jmena[last_name]</option>"; 
    }
    echo "</select>";

    ?>
</body>
</html>