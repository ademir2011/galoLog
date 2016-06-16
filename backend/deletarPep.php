
<form action="?page=deletarPep" method="POST">
    Digite o pep a ser deletado: <input type="number" name="idpep"><br><br/>
    <input type="submit" value="Deletar">
</form>

<?php 

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        require './connectDatabase.php';
        
        global $connect;
        
        $idpep = $_POST['idpep'];
        
        $query = "delete from PEP where idpep = '$idpep'; ";
        
        mysqli_query($connect, $query) or die (mysqli_error($connect));
        mysqli_close($connect);
        
        echo '<br/>';
        echo 'PEP '.$idpep.' deletado com sucesso.';
        
    }

?>

<br/>

<a href="?page=exibirPep"><button>Voltar</button></a>