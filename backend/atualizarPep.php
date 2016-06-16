
<form action="?page=atualizarPep" method="POST">
    <table>
        <tr>
            <td>Digite o pep a ser atualizado:</td>
            <td><input type="number" name="idpep"></td>
        </tr>
        <tr>
            <td></td>
            <td><select name="infopep">
                    <option value="localInstalacao" selected>Local de instalação</option>
                    <option value="referenciaModem">Valor de referencia do modem</option>
                    <option value="macDispositivo">Mac do dispositivo</option>
                    <option value="numeroChip">Numero do chip</option>
                    <option value="referenciaMonitor">Referencia do monitor</option>
                    <option value="referenciaRoteador">Referencia do roteador</option>
                </select></td>
        </tr>
        <tr>
            <td>Digite o novo valor:</td>
            <td><input type="text" name="valordetroca"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Atualizar"></td>
        </tr>
    </table>
    
</form>

<br/>

<a href="?page=exibirPep"><button>Voltar</button></a>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    require './connectDatabase.php';

    global $connect;

    $idpep = $_POST['idpep'];

    $query = "update PEP set ".$_POST['infopep']." = '".$_POST['valordetroca']."' where idpep = '$idpep'; ";

    mysqli_query($connect, $query) or die(mysqli_error($connect));
    mysqli_close($connect);

    echo '<br/>';
    echo 'PEP ' . $idpep . ' atualizado com sucesso.';
}
?>

