<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <button name='vrhni'>Vrhni</button>
    </form>

    <?php 

        if(array_key_exists("vrhni", $_GET))
        {
            $kostka1 = rand(1, 6);
            $kostka2 = rand(1, 6);
            echo $kostka1;
            echo $kostka2;
            if($kostka1 == $kostka2)
            {
                echo "Vyhra";
            }
        }

    ?>
</body>
</html>