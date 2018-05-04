<?php
        require_once ('../config.php');

        if(isset($_GET["dossier"]) && $_GET['dossier'] != '')
        {
            $dossier = $_GET['dossier'];
            $retour = "";
        
        $dirs  = new RecursiveDirectoryIterator($dossier);
        
        $dirs->rewind();

        while($dirs->valid())
        {
            $retour .= '<div class="box">';       

            if(is_dir($dirs->key()))
            {                                       
                if($dirs->getFilename() != "." && $dirs->key() != BASE_DIR && $dirs->key() != BASE_DIR."/." && $dirs->key() != BASE_DIR."/..")
                {
                    if($dirs->getFilename() == "..")
                    {
                        $path = str_replace('\\', '/', $dirs->key());
                        $pathArray = explode('/', $path);
                        array_pop($pathArray);
                        array_splice($pathArray, -1);
                        $parentPath = implode('/', $pathArray);

                        $retour .= '<img class="taille-image" src="img/icon-parent-folder.png" alt="Fichier">
                                    <a class="lienimg color-1 roboto-bold textdecoration-none fs-30" href="'. $parentPath .'"></a>';
                    }   else
                        {
                            $retour .=
                            '<img class="taille-image" src="img/icon-folder.png" alt="Dossier">
                            <a class="lienimg color-1 roboto-bold textdecoration-none fs-30" href="'. $dirs->key() .'">'.$dirs->getFilename().'</a>';
                        }
                    
                }
            }
            else
                {

                    $retour .='<img class="taille-image notransform m-auto" src="img/icon-'.$dirs->getExtension().'.png" alt="Fichier">
                            <p class="text-center roboto-bold ml-5 color-1 absolute-fichier fs-20">' . $dirs->getFilename() . '</p>';
                            
                            
                }
            $retour .= '</div>';
            $dirs->next();
        }

        echo $retour;  
    } 
    
 
