<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="container">
    <?php
    $sequence = filter_input(INPUT_GET, "sequence", FILTER_DEFAULT);

    // $array = explode(',', $sequence);


    preg_match_all('!\d+!', $sequence, $array);
    $array = $array[0];
    $length = count($array);

    function showSequence($arr, $leng)
    {
        foreach ($arr as $chave => $valor) {
            if ($chave === $leng - 1)
                echo "e $valor.";
            else if ($chave === $leng - 2)
                echo "$valor ";
            else
                echo "$valor, ";
        }
    }

    ?>

    <h1>Ordenando com delimitadores desconhecidos</h1>
    <a href='desafio1.php?sequence=1,8,10,22,6'>Sequencia basica</a>
    <p>Os numeros informados são:
        <?php showSequence($array, $length) ?>
    </p>

    <p>Os numeros em ordem crescente:
        <?php
        sort($array);
        showSequence($array, $length);
        ?>
    </p>
    <p>Os numeros em ordem decrescente:
        <?php
        rsort($array);
        showSequence($array, $length);
        ?>
    </p>




</body>

</html>