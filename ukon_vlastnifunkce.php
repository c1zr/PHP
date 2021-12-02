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
// cyklem foreach projdeme polozku po polozce
// Pokud aktualni polozka odpovida tomu co hledame, tak
// vratime true. Pokud to neodpovida jdeme dal. Pokud
// jsme prosli cele pole, vratime false ze jsme nic nenasli
        function jeVPoli($pole, $hledanaPolozka)
        {
            foreach ($pole as $polozka)
            {
                if ($hledanaPolozka == $polozka)
                {
                    return true;
                }
            }
            return false;
        }


        $jmena = ["Petr", "Pavel"];
        $jetam = jeVPoli($jmena, "Karel");
        var_dump($jetam);
    ?>
</body>
</html>