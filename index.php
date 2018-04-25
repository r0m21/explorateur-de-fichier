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
        $base_url = "./";

        if(isset($_GET["dossier"]))
        {
            $base_url = $base_url.$_GET['dossier'];
        }

        //scandir — Liste les fichiers et dossiers dans un tableau.
        $dirs = array_diff(scandir($base_url), array('.git'));
        
        
        //On boucle
        foreach($dirs as $filename)
        {
            $folder = isset($_GET["dossier"]) . $filename . "/";

            $folder = str_replace("/..", "", $folder);
            $folder = str_replace("/.", "", $folder);
           

            if(is_dir($folder))
            {       
                echo '<a href="index.php?dossier=' . $folder . '">'. $filename .'</a><br>';              
            } else
                {
                    echo $filename . "<br>";           
                }  
        }   
?>


    <script src="js/script.js"></script>
</body>
</html>