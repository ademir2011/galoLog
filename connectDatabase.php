<?php

    $usuario    = "root";
    $senha      = "junior2011";
    $servidor   = "localhost";
    $db         = "DB_GALO";
    
    //funçao usada para ser exibido caracteres acentuados
    header('Content-Type: text/html; charset=utf-8');
    
    $connect = mysqli_connect($servidor, $usuario, $senha, $db) or die (mysqli_error());

    if(!$connect){
        echo "error database";
    }
    
?>

