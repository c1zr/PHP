<?php 
    session_start();

// zajistime aby existoval kosik v session, pokud neexistuje tak jej tam ulozime jako prazdne pole 

    if (array_key_exists("kosik", $_SESSION) == false)
    {
        $_SESSION["kosik"] = [];
    }

    $produkty = array(
        "gambrinus" => array(
            "cena" => 16,
            "popis" => "Svetla desitecka",
        ),
        "plzen" => array(
            "cena" => 46,
            "popis" => "Dvanactecka",
        ),
        "vodka" => array(
            "cena" => 399,
            "popis" => "Ruský standard",
        ),
    );

    // zpracovani pridavani produktu do kosiku
    if(array_key_exists("pridat", $_POST))
    {
        $produkt = $_POST["pridat"];
        //pridame dany produkt do kosiku
        $_SESSION["kosik"][] = $produkt;
        //provedeme presmerovani abz refresh nezpusobil ynovupridani do kosiku 
        header("Location: ?");
        //var_dump($_SESSION);
    }


//zpracovani odebrani z kosiku

if(array_key_exists("odebrat", $_POST))
{
    $index = $_POST["odebrat"];
    //odebereme z kosiku 
    unset($_SESSION["kosik"][$index]);
    header("Location: ?");
}

//zpracovani vyprazdneni 

if(array_key_exists("vyprazdnit", $_POST))
{
    $_SESSION["kosik"] = [];
}


?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nabidka produktu</h1>
    <form method="post"> 

        <?php 

            echo "<ul>";
            foreach($produkty as $zbozi => $detail)
            {
                echo"<li>
                        $zbozi - {$detail['cena']} KC 
                        <button name='pridat' value='$zbozi'> +1 </button>
                    </li>";
            }
            echo "</ul>";

        ?>
    </form>  
    <hr>
    <h1>Obsah kosiku</h1>
    <form method="post">
    <?php  
        echo "<ul>";
        $celkovaCena = 0;
        foreach ($_SESSION["kosik"] as $index => $zbozi)
        {
            $cena = $produkty[$zbozi] ["cena"];
            $celkovaCena += $cena;

            echo"<li>
                    $zbozi - {$cena} Kc
                    <button name='odebrat' value='$index'>Odebrat</button>
                </li>";
        }
        echo "</ul>";
        echo"<h2>Celkova cena: $celkovaCena</h2>";
    ?>
    </form>

    <form method="post">
        <button name="vyprazdnit">Vyprazdnit</button>
    </form>
</body>
</html>