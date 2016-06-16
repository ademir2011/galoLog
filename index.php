<!DOCTYPE html>
<html lang="pt">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">

    </head>
    <body style="margin: 0;text-align: center;">

        <table>
            <tr>
                <td>
                    <nav style="line-height:30px;background-color:#eeeeee;height:99vh;width:150px;">
                        <center>
                            <br/>
                            <a href="?page=exibirPep" ><button style="width: 90%;" >PEP</button></a><br/>
                            <a href="?page=LogPep" ><button style="width: 90%;" >Log PEP</button></a>
                            <a href="?page=arqAnuncios" ><button style="width: 90%;" >Arquivo de anúncios</button></a>
                        </center>
                    </nav>
                </td>
                <td valign="top">

                    <?php
                    $page = $_GET["page"];

                    if ($page == "cadastrarPep") {
                        include './page/pageCadastrarPep.php';
                    } else if ($page == "exibirPep") {
                        include './page/pageExibirPep.php';
                    } else if ($page == "LogPep") {
                        include './page/pageLogPep.php';
                    } else if ($page == "arqAnuncios") {
                        include './page/pageInjector.php';
                    } else if ($page == "deletarPep") {
                        include './backend/deletarPep.php';
                    } else if ($page == "atualizarPep") {
                        include './backend/atualizarPep.php';
                    }
                    
                    ?>

                </td>
            </tr>
        </table>

        


    </body>
</html>