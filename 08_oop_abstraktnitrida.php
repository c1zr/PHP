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
   abstract class Clovek
    {
        abstract function nakupNaVikend ();
    }

class Muz extends Clovek
{
    function nakupNaVikend()
    {
        echo "pivo, maso, uhli na gril, ...";
    }
}

class Zena extends Clovek
{
    function nakupNaVikend()
    {
        echo "wellness, kabelcicka, saticky, 3.14covinky";
    }
}

$adam = new Muz();
$adam ->nakupNaVikend();

echo "<br>";

$eva = new Zena();
$eva ->nakupNaVikend();

?>
</body>
</html>