

<form action="./backend/cadastrarPep.php" method="POST">
   
    <fieldset>
        <legend>Cadastro PEP</legend>
        <table>
            
            <tr>
                <td>Valor do PEP:</td>
                <td><input type="number" name="idpep"></td>
            </tr>
            <tr>
                <td>Local de instalação:</td>
                <td><input type="text" name="localInstalacao"></td>
            </tr>
            <tr>
                <td>Valor de referencia do modem:</td>
                <td><input type="text" name="referenciaModem"></td>
            </tr>
            <tr>
                <td>Mac do dispositivo:</td>
                <td><input type="text" name="macDispositivo"></td>
            </tr>
            <tr>
                <td>Numero do chip:</td>
                <td><input type="text" name="numeroChip"></td>
            </tr>
            <tr>
                <td>Referencia do monitor:</td>
                <td><input type="text" name="referenciaMonitor"></td>
            </tr>
            <tr>
                <td>Referencia do roteador:</td>
                <td><input type="text" name="referenciaRoteador"></td>
            </tr>
            <tr>
                <td></td>
                <td><input style="width: 100%;" type="submit" value="Salvar"></td>
            </tr>

        </table>

    </fieldset>

</form>
<br/>
<a href="?page=exibirPep"><button>Voltar</button></a>
