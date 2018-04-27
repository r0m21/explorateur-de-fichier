<?php
        //Nom du dossier à scanner
        $base_url = "./";

        if(isset($_GET["dossier"]))
        {
            $base_url = $base_url . $_GET['dossier'];
        }

        //scandir — Liste les fichiers et dossiers dans un tableau.
        $dirs = array_diff(scandir($base_url), array('.git', "."));
       
?>