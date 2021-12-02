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


//

include "php-image-resize-master/lib/ImageResize.php";

$image = new \Gumlet\ImageResize("Pilsner_urquell_beer.jpg");
$image->resizeToBestFit(40, 30);
$image->save("malepivo.jpg");
echo"Hotovo";

    ?>
</body>
</html>