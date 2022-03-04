<?php


$resultQueryActu = $mysqli->query("SELECT * FROM actu ORDER BY id DESC");

if ($resultQueryActu->num_rows<1) {

 ?>

    <h2>Vous n'avez pas d'actualité<h2>


  <?php 
} else {

    foreach ($resultQueryActu as $rowActu) {?>
    
    
    <h3><?php echo $rowActu["title"];?> </h3>

    
    <?php
?>
  <a href=""a>detail</A>

<a href="<?php echo $linkRealise; ?>" type="button" class="btn btn-outline-success">Réal.</a>  

<?php      
        # code...
    }// END fOR EACH $RESULTQUERYACTU 


    # code...
}// END IF TEST $resultQueryACTU



?>