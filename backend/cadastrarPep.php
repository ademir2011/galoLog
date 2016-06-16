
cadastrado

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    require '../connectDatabase.php';
    createPep();
    
}

function createPep(){
    
    global $connect;
    
    echo $_POST['idpep'];
    echo 'teste';
    
    $idpep                  = $_POST['idpep'];
    $localInstalacao        = $_POST['localInstalacao'];
    $referenciaModem        = $_POST['referenciaModem'];
    $macDispositivo         = $_POST['macDispositivo'];
    $numeroChip             = $_POST['numeroChip'];
    $referenciaMonitor      = $_POST['referenciaMonitor'];
    $referenciaRoteador     = $_POST['referenciaRoteador'];
    
    
    $query = "INSERT INTO PEP (idpep, localInstalacao, referenciaModem, macDispositivo, numeroChip, referenciaMonitor, referenciaRoteador) "
            . "values ('$idpep','$localInstalacao','$referenciaModem','$macDispositivo','$numeroChip', '$referenciaMonitor','$referenciaRoteador');";
    
    mysqli_query($connect, $query) or die (mysqli_error($connect));
    mysqli_close($connect);
    
}

?>