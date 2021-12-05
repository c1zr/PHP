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

        //promenna, kterou jsem dal do pole 
        $badass = "Matysek";


        //vytvoreni pole 
        $pole = ["Pricenzna Zvejka", 
                "Pes Matysek", 
                "Nejlepsi Bulbasaur",
                $badass];

        //uprava pole s hodnotou nula
        $pole[0] = "Skuncik";

        //kdyz nemachm zavorky prazdne zadana vec se priradi na konec 
        $pole[] = "PteroPes";

        //unset dokaze odstranit hodnotu z pole
        unset($pole[4]);

        //usporada prvky podle abecedy
        sort($pole);

        //usporada opacne
        rsort($pole);

        //pridani na konec pole, ale muzu i vic najednou
        array_push($pole, "Verca Lstiva Samyce", "Dalsi Lstiva Samyce");

        //odebrani z konce pole (mam to hozene v promenne $kdo abych videl kdo to byl)
        $kdo = array_pop($pole);
        echo $kdo;

        //odebrani ze zacatku pole (mam to hozene v promenne $kdo abych videl kdo to byl)
        $kdo2 = array_shift($pole);
        echo $kdo2;

        //prihodi novy element na zacatek
        $pridaniNaZacatek = "Zacatek";
        array_unshift($pole, $pridaniNaZacatek);


        //vypis pole 
        echo "<pre>";
        print_r($pole);
        echo "</pre>";

        //count(); pocita pocet prvku v poli
        echo count($pole);


        /*if ( count($pole)){
            echo "Yaaay";
        }else{
            "Meh";
        }
        */
    ?>
</body>
</html>