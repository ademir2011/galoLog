<form action="./backend/createInjector.php" method="POST">

    <?php
    $acordando  = 3;
    $atrasado   = 4;
    $almoco     = 6;
    $lanche     = 4;
    $janta      = 6;
    $dormindo   = 12;
    ?>

    <fieldset>
        <legend>Injector</legend>
        <table>
            <tr>
                <td>Acordando:</td>
                <?php for ($i = 0; $i < $acordando; $i++) { ?>
                    <td><input style="width: 80px;" type="text" name="acordando_pepvalue<?php echo $i; ?>"></td>
                <?php } ?>
            </tr>
            <tr>
                <td>Atrasado:</td>
                <?php for ($i = 0; $i < $atrasado; $i++) { ?>
                    <td><input style="width: 80px;" type="text" name="atrasado_pepvalue<?php echo $i; ?>"></td>
                <?php } ?>
            </tr>
            <tr>
                <td>Almoço:</td>
                <?php for ($i = 0; $i < $almoco; $i++) { ?>
                    <td><input style="width: 80px;" type="text" name="almoco_pepvalue<?php echo $i; ?>"></td>
                <?php } ?>
            </tr>
            <tr>
                <td>Lanche:</td>
                <?php for ($i = 0; $i < $lanche; $i++) { ?>
                    <td><input style="width: 80px;" type="text" name="lanche_pepvalue<?php echo $i; ?>"></td>
                <?php } ?>
            </tr>
            <tr>
                <td>Janta:</td>
                <?php for ($i = 0; $i < $janta; $i++) { ?>
                    <td><input style="width: 80px;" type="text" name="janta_pepvalue<?php echo $i; ?>"></td>
                <?php } ?>
            </tr>
            <tr>
                <td>Dormindo:</td>
                <?php for ($i = 0; $i < $dormindo; $i++) { ?>
                    <td><input style="width: 80px;" type="text" name="dormindo_pepvalue<?php echo $i; ?>"></td>
                <?php } ?>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Download"/></td>
            </tr>
        </table>
        
    </fieldset>

</form>


