<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    require '../connectDatabase.php';
    showLog();
    
}

function showLog(){
    
    $idpep = $_POST['idpep'];
    
}

?>
