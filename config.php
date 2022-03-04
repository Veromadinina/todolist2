<?php

    $host = "localhost";

    $userName = "root";

    $passWord = "";
    
    $dataBase = "todolist2";

    $dir_fs = $_SERVER['DOCUMENT_ROOT']."/";// variable d'environnment
    $dir_ws = "/";


    $mysqli = @new mysqli($host, $userName, $passWord, $dataBase);

    if($mysqli->connect_errno) 
    
    {printf("echec de la connexion:%s\n");


    }

    


?>