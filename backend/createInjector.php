<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require '../connectDatabase.php';
    createInjector();
}

function createInjector() {

    $acordando = array($_POST['acordando_pepvalue0'],
        $_POST['acordando_pepvalue1'],
        $_POST['acordando_pepvalue2'],
        $_POST['acordando_pepvalue3'],
        $_POST['acordando_pepvalue4'],
        $_POST['acordando_pepvalue5']);

    $atrasado = array($_POST['atrasado_pepvalue0'],
        $_POST['atrasado_pepvalue1'],
        $_POST['atrasado_pepvalue2'],
        $_POST['atrasado_pepvalue3']);

    $almoco = array($_POST['almoco_pepvalue0'],
        $_POST['almoco_pepvalue1'],
        $_POST['almoco_pepvalue2'],
        $_POST['almoco_pepvalue3'],
        $_POST['almoco_pepvalue4'],
        $_POST['almoco_pepvalue5']);

    $lanche = array($_POST['lanche_pepvalue0'],
        $_POST['lanche_pepvalue1'],
        $_POST['lanche_pepvalue2'],
        $_POST['lanche_pepvalue3']);

    $janta = array($_POST['janta_pepvalue0'],
        $_POST['janta_pepvalue1'],
        $_POST['janta_pepvalue2'],
        $_POST['janta_pepvalue3'],
        $_POST['janta_pepvalue4'],
        $_POST['janta_pepvalue5']);

    $dormindo = array($_POST['dormindo_pepvalue0'],
        $_POST['dormindo_pepvalue1'],
        $_POST['dormindo_pepvalue2'],
        $_POST['dormindo_pepvalue3'],
        $_POST['dormindo_pepvalue4'],
        $_POST['dormindo_pepvalue5'],
        $_POST['dormindo_pepvalue6'],
        $_POST['dormindo_pepvalue7'],
        $_POST['dormindo_pepvalue8'],
        $_POST['dormindo_pepvalue9'],
        $_POST['dormindo_pepvalue10'],
        $_POST['dormindo_pepvalue11']);

    $indexAcordando = 0;
    $indexAtrasado = 0;
    $indexAlmoco = 0;
    $indexLanche = 0;
    $indexJanta = 0;
    $indexDormindo = 0;

    $handle = fopen("../teste.txt", "wb");

    for ($i = 0; $i < 24; $i++) {
        for ($j = 0; $j < 60; $j++) {
            for ($k = 0; $k <= 45; $k+=15) {

                if ($i >= 0 && $j >= 0 && $k >= 0 && $i <= 5 && $j <= 59 && $k <= 59) {

                    fwrite($handle, $i . ":" . $j . ":" . $k . "-" . $dormindo[$indexDormindo++] . "\n");

                    if ($indexDormindo == sizeof($dormindo)) {
                        $indexDormindo = 0;
                    }
                } else if ($i >= 6 && $j >= 0 && $k >= 0 && $i <= 7 && $j <= 59 && $k <= 59) {

                    fwrite($handle, $i . ":" . $j . ":" . $k . "-" . $acordando[$indexAcordando++] . "\n");

                    if ($indexAcordando == sizeof($acordando)) {
                        $indexAcordando = 0;
                    }
                } else if ($i >= 8 && $j >= 0 && $k >= 0 && $i <= 10 && $j <= 59 && $k <= 59) {

                    fwrite($handle, $i . ":" . $j . ":" . $k . "-" . $atrasado[$indexAtrasado++] . "\n");

                    if ($indexAtrasado == sizeof($atrasado)) {
                        $indexAtrasado = 0;
                    }
                } else if ($i >= 11 && $j >= 0 && $k >= 0 && $i <= 13 && $j <= 59 && $k <= 59) {

                    fwrite($handle, $i . ":" . $j . ":" . $k . "-" . $almoco[$indexAlmoco++] . "\n");

                    if ($indexAlmoco == sizeof($almoco)) {
                        $indexAlmoco = 0;
                    }
                } else if ($i >= 14 && $j >= 0 && $k >= 0 && $i <= 16 && $j <= 59 && $k <= 59) {

                    fwrite($handle, $i . ":" . $j . ":" . $k . "-" . $lanche[$indexLanche++] . "\n");

                    if ($indexLanche == sizeof($lanche)) {
                        $indexLanche = 0;
                    }
                } else if ($i >= 17 && $j >= 0 && $k >= 0 && $i <= 20 && $j <= 59 && $k <= 59) {

                    fwrite($handle, $i . ":" . $j . ":" . $k . "-" . $janta[$indexJanta++] . "\n");

                    if ($indexJanta == sizeof($janta)) {
                        $indexJanta = 0;
                    }
                } else if ($i >= 21 && $j >= 0 && $k >= 0 && $i <= 23 && $j <= 59 && $k <= 59) {

                    fwrite($handle, $i . ":" . $j . ":" . $k . "-" . $dormindo[$indexDormindo++] . "\n");

                    if ($indexDormindo == sizeof($dormindo)) {
                        $indexDormindo = 0;
                    }
                }
            }
        }
    }

    fclose($handle);

    echo 'cadastrado';
}

?>
