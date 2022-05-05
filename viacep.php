<?php

use Claudsonm\CepPromise\CepPromise;

require 'vendor/autoload.php';

$cep = filter_input(INPUT_POST, "cep", FILTER_DEFAULT);
$address = null;
if ($cep) {
    $address = CepPromise::fetch($cep);
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



</head>

<body class="container">

    <form action="viacep.php" method="post">
        <div class="form-group col-md-6">
            <h1>Exemplo CEP com Composer</h1>
        </div>

        <div class="form-group col-md-6">
            <label for="cep">CEP:</label>
            <input type="number" id="cep" name="cep" class="form-control" required />
        </div>

        <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>

    </form>
    <div class="form-group col-md-3">
        <?php
        if ($address) {
            echo "<h2> CEP:$address->zipCode</h2>";
            echo "<p>$address->street</p>";
            echo "<p>Bairro $address->district</p>";
            echo "<p>Cidade $address->city</p>";
            echo "<p>Estado $address->state</p>";
        }
        ?>
    </div>

</body>

</html>