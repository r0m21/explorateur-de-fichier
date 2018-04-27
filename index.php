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
<body class="bg-4">
    <header class="bg-1 d-flex">

<img src="img/header.png" alt="header">    
</header>

    <main class="maincontainer">
        
<?php        foreach($dirs as $filename)
        {
            $folder = $base_url . $filename . "/";
         
            if(is_dir($folder) && $filename != "..")
            {
?>
        <div class="box">
            <img class="taille-image" src="img/icon-folder.png" alt="Dossier">
            <a class="lienimg textdecoration-none" href="index.php?dossier=<?php echo $folder ?>"><?php echo $filename ?></a>
        </div>    
<?php                                         
            }   else if(is_dir($folder) && $filename == "..")
                {
?>
                <div class="box">
                    <img class="taille-image" src="img/icon-parent-folder.png" alt="Fichier">
                    <a class="lienimg textdecoration-none" href="index.php?dossier=<?php echo $folder ?>"></a>
                </div>    
<?php                }
            else
                {
                    $arrayExt = explode('.', $filename); // Si index.php => arrayExt[0] = index, arrayext[1] = php.
                    $ext = $arrayExt[count($arrayExt) - 1];
?>              
                <div class="box2">
<?php               echo  '<img class="taille-image m-auto" src="img/icon-'.$ext.'.png" alt="Fichier">'
?>                      <p class="text-center ml-5 color-1 absolute-fichier"><?php echo $filename ?></p> 
                </div>     
<?php                            
                }
            
        }   
?>
        
    </main>

        <script src="js/script.js"></script>
    </body>
</html>