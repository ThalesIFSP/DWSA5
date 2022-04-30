<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="container">
    <?php
    $inicio = filter_input(INPUT_POST, "inicio", FILTER_DEFAULT);
    $final = filter_input(INPUT_POST, "final", FILTER_DEFAULT);
    $incremento = filter_input(INPUT_POST, "incremento", FILTER_DEFAULT);



    ?>
    <h1>Parâmetros informados:</h1>
    <p>Início: <?= $inicio ?></p>
    <p>Final: <?= $final ?></p>
    <p>Incremento: <?= $incremento ?></p>
    <?php

    if ($final < $inicio) {
        for ($inicio = $inicio; $final <= $inicio; $inicio = $inicio - $incremento) {
            echo $inicio . " ";
        }
    } else {
        for ($inicio = $inicio; $inicio <= $final; $inicio = $inicio + $incremento) {
            echo $inicio . " ";
        }
    }


    ?>
</body>

</html>