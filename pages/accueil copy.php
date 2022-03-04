<h2 class="mt-5">Accueil</h2>

<ul class="list-group">

<?php

        /* Sélection de toutes les lignes de tasks */
        $resultQueryTasks = $mysqli->query("SELECT * FROM tasks ORDER BY id DESC");
        //printf("Nombre de lignes affectées (SELECT): %d\n", $mysqli->affected_rows);


?>

<?php

    foreach($resultQueryTasks as $rowtache){

?>
  <li class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
   
    <div class="d-flex gap-2 w-100 justify-content-between">
      <div>
        <h6 class="mb-0"><?php echo $rowtache["id"]; ?> - <?php echo $rowtache["tache"]; ?></h6> <!--Afficher l'id - les taches de la base de données-->  
        <p class="mb-0 opacity-75"><?php echo $rowtache["dateins"]; ?></p><!--Afficher la date de la base de données-->
      </div>
      <small class="opacity-50 text-nowrap"></small>
    </div>

    <?php if($rowtache["etat"]== "n"){      
        
        $linkRealise=$dir_ws."crud.php?action=realiser&id=".$rowtache["id"];
        
        
        
        ?>                                    
    <a href="<?php echo $linkRealise; ?>" type="button" class="btn btn-outline-success">Réal.</a><!-- afficher le bouton en fonction de l'état -->
    <?php } ?>

    <?php if($rowtache["etat"]== "o"){    
        
        
        $linkSupprime=$dir_ws."crud.php?action=supprimer&id=".$rowtache["id"];
        
        
        ?>

    <a href="<?php echo $linkSupprime; ?>" type="button" class="btn btn-outline-danger">Supp.</a>
    <?php } ?>
    </li>
  <?php

}
  ?>



</ul>