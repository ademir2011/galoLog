<table>
    <tr>
        <td style="width: 150px;background-color: #eeeeee;line-height: 30px;">
    <center>
        <a href="?page=cadastrarPep" ><button>Cadastrar pep</button></a><br/>
        <a href="?page=atualizarPep" ><button>Atualizar pep</button></a><br/>
        <a href="?page=deletarPep" ><button>Deletar pep</button></a><br/>
    </center>
</td>
<td>

    <table border="1" style="width: 900px;">

        <tr>
            <th>Valor do PEP</th>
            <th>Local de instalação</th>
            <th>Valor de referencia do modem</th>
            <th>Mac do dispositivo</th>
            <th>Numero do chip</th>
            <th>Referencia do monitor</th>
            <th>Referencia do roteador</th>
        </tr>

        <?php
        require 'connectDatabase.php';

        global $connect;

        $query = "Select * FROM PEP";

        $result = mysqli_query($connect, $query);
        $number_of_rows = mysqli_num_rows($result);


        if ($number_of_rows > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr>
                    <td><?php echo $row["idpep"]; ?></td>
                    <td><?php echo $row["localInstalacao"]; ?></td>
                    <td><?php echo $row["referenciaModem"]; ?></td>
                    <td><?php echo $row["macDispositivo"]; ?></td>
                    <td><?php echo $row["numeroChip"]; ?></td>
                    <td><?php echo $row["referenciaMonitor"]; ?></td>
                    <td><?php echo $row["referenciaRoteador"]; ?></td>
                </tr>

                <?php
            }
        }

        mysqli_close($connect);
        ?>

    </table>
</td>
</tr>
</table>






