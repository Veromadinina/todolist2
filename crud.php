<?php

        include ("config.php");

        // je teste l'existence de $GET_["action"]

        if (isset($_GET["action"])) {

        // je controle l'action à effectuer
            // Je fabrique ma requête
            switch ($_GET["action"]) {
               
                case "ajouter": 
                    var_dump($_POST);
                    
                   // $maRequete = "INSERT INTO `tasks` (`id`, `tache`,`etat`) VALUES (NULL, '".$_POST["tache"]."','n')";
                    $maRequete = "INSERT INTO `tasks` (`id`, `tache`, `etat`) VALUES (NULL, '".$_POST["tache"]."','n')";
                    ;
                    
                    break;

                case "realiser":
                   $maRequete = "UPDATE `tasks` SET `etat` = 'o' WHERE `tasks`.`id`=".$_GET["id"];
                    break;

                case "supprimer":
                    $maRequete = "delete from tasks where id=".$_GET["id"];
                    
                    break;

                default:
                   //echo "i n'est ni égal à 2, ni à 1, ni à 0.";

            }
            // exécution de ma requête d'insertion
             if($mysqli->query($maRequete)){
               //je fais une redirection vers la page index
                header('Location: /');
                //echo"requête exécutée avec succès";
            }
        };







        

?>