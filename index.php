<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,700" rel="stylesheet">
    <title>Explorator 3000</title>
</head>
<body class="bg-2">
    <header class="bg-1 d-flex">
        <img src="img/header.png" alt="header">    
    </header>

    <main class="maincontainer" id="container">
        
<?php   $dirs = new RecursiveDirectoryIterator(BASE_DIR);       
        $dirs->rewind();
    
        while($dirs->valid()){
            if($dirs->getFilename() != '.' && $dirs->getFilename() != '..'){ ?>
                <div class="box">
<?php               if(is_dir($dirs->key())){ ?>
                        <img class="taille-image" src="img/icon-folder.png" alt="Dossier">
                        <a class="lienimg color-1 roboto-bold textdecoration-none fs-30" href="<?php echo $dirs->key() ?>"><?php echo $dirs->getFilename() ?></a>
<?php               } else { ?>
                        <img class="taille-image notransform m-auto" src="img/icon-<?php echo $dirs->getExtension() ?>.png" alt="Fichier">
                        <p class="text-center roboto-bold ml-5 color-1 absolute-fichier fs-20"><?php echo $dirs->getFilename() ?></p>
<?php               } ?>            
                </div>
<?php       }
            $dirs->next();    
        } ?>
    </main>
    <script src="js/script.js"></script>
    </body>
</html>