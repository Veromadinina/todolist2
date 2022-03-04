<h1 class="mt-5">Ajouter une tache</h1>

<form method="post" action="<?php  echo $dir_ws ;?>crud.php?action=ajouter"><!-- formulaire post-->

<div class="mb-3">
 <input type="text" name="tache" class="form-control" id="exampleFormControlInput1" placeholder="Saisissez votre tache ici">
</div>

<div class="mb-3">
    <input type="submit" value="Ajouter" class="btn btn-primary" id="exampleFormControlInput1" placeholder="Saisissez votre tache ici">

</div>
<form> 
<!--remplacer les élements de l'exemple bootstrap -->