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
       
        $ok = preg_match("/google/", "google a facebook"); // true
        var_dump($ok);
        
        // . (tecka) - zastupuje libovolny znak
        $ok = preg_match("/go.gle/", "goWgle a facebook"); // true
        var_dump($ok);
        
        $ok = preg_match("/go.gle/", "goWRgle a facebook"); // false
        var_dump($ok);
        
        
        // * (hvezdicka) - odpovida libovolnemu poctu vyskytu
        // predchozi polozky
        $ok = preg_match("/go*gle/", "ggle a facebook"); // true
        var_dump($ok);
        
        $ok = preg_match("/go*gle/", "gooooogle a facebook"); // true
        var_dump($ok);
        
        $ok = preg_match("/go.*gle/", "go7JUb9gle a facebook"); // true
        var_dump($ok);
        
        
        // + (plus) - vyskyt predchozi polozky alespon 1x
        $ok = preg_match("/go+gle/", "ggle a facebook"); // false
        var_dump($ok);
        
        $ok = preg_match("/go+gle/", "gooogle a facebook"); // true
        var_dump($ok);
        
        // ? (otaznik) - vyskyt predchozi polozky je 1x nebo 0x
        $ok = preg_match("/eth?anol/", "etanol je zly"); // true
        var_dump($ok);
        
        $ok = preg_match("/eth?anol/", "ethanol je zly"); // true
        var_dump($ok);
        
        // {} (slozene zavorky) - definovany pocet vyskytu pred. pol.
        $ok = preg_match("/go{3}gle/", "gooogle a facebook"); // true
        var_dump($ok);
        
        $ok = preg_match("/go{2,5}gle/", "gooogle a facebook"); // true
        var_dump($ok);
        
        
        // ^ (striska) - musi tim regu. vyraz. zacinat
        $ok = preg_match("/^google/", "google a facebook"); // true
        var_dump($ok);
        
        $ok = preg_match("/^google/", "facebook a google"); // false
        var_dump($ok);
        
        // $ (dolar) - musi tim regu. vyraz. koncit
        $ok = preg_match("/google$/", "google a facebook"); // false
        var_dump($ok);
        
        $ok = preg_match("/google$/", "facebook a google"); // true
        var_dump($ok);
        // kombinace fixacnich znaku se pouziva u validaci
        $ok = preg_match("/^google$/", "google"); // true
        var_dump($ok);
        
        
        // [] (hranate zavoky) - jeden ze zadanych znaku
        $ok = preg_match("/go[9eR@]gle/", "go9gle"); // true
        var_dump($ok);
        
        $ok = preg_match("/go[a-zA-Z0-9]{6}gle/", "goW5FGCPgle"); // true
        var_dump($ok);
        
        // () (kulate zavorky) - ohranicuji skupinu
        $ok = preg_match("/^ahoj( lidi)+$/", "ahoj lidi"); // true
        var_dump($ok);
        
        $ok = preg_match("/^ahoj( lidi)+$/", "ahoj lidi lidi"); // true
        var_dump($ok);
        
        // | (pipe) logicke nebo
        $ok = preg_match("/(cz)|(com)/", "google.com"); // true
        var_dump($ok);
        
        // \ (zpetne lomitko) escapuje nasledujici znak, tak aby
        // specialni znak se nechoval jako specialni znak ale jako
        // pismenko
        $ok = preg_match("/^.+\\.cz$/", "google.cz"); // true
        var_dump($ok);
        
    ?>
</body>
</html>
   