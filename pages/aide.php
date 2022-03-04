<?php


$resultQueryAide = $mysqli->query("SELECT * FROM aide ORDER BY id DESC");

if ($resultQueryAide->num_rows<1) {

 ?>

    <h2>Vous n'avez pas d'aide<h2>


  <?php 
} else {

    foreach ($resultQueryAide as $rowAide) {?>
    
    
    <h3><?php echo $rowAide["nom"];?> </h3>
    <h3><?php echo $rowAide["description"];?> </h3>
    
    <?php

      
        # code...
    }// END fOR EACH $RESULTQUERYAIDE 


    # code...
}// END IF TEST $resultQueryAide



?>