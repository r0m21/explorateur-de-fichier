<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
<?php
        //Nom du dossier à scanner
        $dir = (!isset($_GET["dossier"])) ? __DIR__ : $_GET["dossier"];

        //scandir — Liste les fichiers et dossiers dans un tableau
        $tableau = scandir($dir);

        //On boucle
        foreach($tableau as $filename)
        {
            $folder = $dir . '/' .$filename;
            if(is_dir($folder))
            { 
                echo '<a href="index.php?dossier=' . $folder . '">'. $filename .'</a><br/>';
            } else{
                echo $filename . "<br>";           
            }  
        }   
?>


    <script src="js/script.js"></script>
</body>
</html>