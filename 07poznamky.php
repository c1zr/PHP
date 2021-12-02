<?php 
    if(array_key_exists("odeslat", $_POST))
    {
        $pozmky = $_POST["poznamky"];
        file_put_contents("poznamky.txt", $pozmky);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <textarea name="poznamky" cols="80" rows="20"><?php 
        if (file_exists("poznamky.txt"))
        {
            echo file_get_contents("poznamky.txt");
        }
        ?></textarea>
        <br>
        <button name="odeslat">Odeslat</button>
    </form>

    <script src="tinymce\js\tinymce\tinymce.min.js"></script>
    <script>
        tinymce.init({
			selector: 'textarea',
		});
    </script>

</body>
</html>