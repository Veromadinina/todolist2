<h1 class="mt-5">TITRES</h1>
<?php
// Vérification de $GET_["mod"]

    if(isset($_GET["mod"])){

        switch ($_GET["mod"]) {
            case "ajouter":
                include($dir_fs."pages/ajouter.php");
                break;
               
            case "aide":
                include($dir_fs."pages/aide.php");
                break;
            
            default:
                 include($dir_fs."pages/accueil.php");
                     

             }

    }else{
        include($dir_fs."pages/accueil.php");
    }


?>