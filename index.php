<?php

// fichier utile pour me connecter à la base de donnée
        include("config.php");

      /*  $content = file_get_contents("https://www.lemonde.fr/education/rss_full.xml") ;

        $monRss = new SimpleXMLElement($content) ;

        //var_dump($monRss) ;

        foreach($monRss->channel->item as $entry){
                //echo $entry->title ;

                echo $entry->description ;
                $mysqli->query("INSERT INTO `actu` (`id`, `title`, `description`, `dateins`) 
                                VALUES (NULL, '".$entry->title."', '".$entry->description."', CURRENT_TIMESTAMP)") ;

  




                
        }









        exit();*/

        
        include("common/header.html.php");
        


?>



        <!--center-->
        <!-- Begin page content -->
        <main class="flex-shrink-0">
        <div class="container">
           <?php
           include("modules/module.php");
           ?>
        </div>
        </main>
         <!-- End center-->


         <?php

        include("common/footer.html.php");


         ?>

         







        


