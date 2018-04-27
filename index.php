<?php require_once("php/traitement.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,700" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header class="bg-1 h25 d-flex">
        <h1 class="color-1 fs-50 roboto-bold align-self-center m-auto">EXPLORATOR 3000</h1>
    </header>

    <main class="maincontainer">
        
<?php        foreach($dirs as $filename)
        {
            $folder = $base_url . $filename . "/";
         
            if(is_dir($folder) && $filename != "..")
            {
?>
        <div class="box">
            <img class="dossier taille-image" src="img/folder.png" alt="Dossier">
            <a class="dossier textdecoration-none" href="index.php?dossier=<?php echo $folder ?>"><?php echo $filename ?></a>
        </div>    
<?php                                         
            }   else if(is_dir($folder) && $filename == "..")
                {
?>
                <div class="box">
                    <img class="dossier taille-image" src="img/parentfolder.png" alt="Fichier">
                    <a class="dossierparent textdecoration-none" href="index.php?dossier=<?php echo $folder ?>"></a>
                </div>    
<?php                }
            else
                {
?>              <div class="box">
                    <div class="d-flex column m-auto">
                        <img class="taille-image m-auto" src="img/icon-php.png" alt="Fichier">
                        <p class="text-center ml-5 color-1"><?php echo $filename ?></p>
                    </div>
                </div>     
<?php                            
                }
            
        }   
?>
        
    </main>

        <script src="js/script.js"></script>
    </body>
</html>