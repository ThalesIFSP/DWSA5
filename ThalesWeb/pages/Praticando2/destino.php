<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .aprovado {
            text-decoration: underline;
            color: green;
            font-weight: bold;
            font-size: 20px
        }

        .reprovado {
            text-decoration: underline;
            color: red;
            font-weight: bold;
            font-size: 20px
        }

        .recuperacao {
            text-decoration: underline;
            color: orange;
            font-weight: bold;
            font-size: 20px
        }
    </style>


</head>

<body class="container">
    <h1>Destino GET</h1>
    <?php
    $n1 = filter_input(INPUT_POST, "n1", FILTER_DEFAULT);
    $n2 = filter_input(INPUT_POST, "n2", FILTER_DEFAULT);
    $n3 = filter_input(INPUT_POST, "n3", FILTER_DEFAULT);

    $media = ($n1 + $n2 + $n3) / 3;
    echo "Um aluno com as média <strong>$n1</strong>, <strong>$n2</strong> e <strong>$n3</strong> tem uma média igual a <strong>$media</strong><br><br>";
    if ($media > 6) {
        echo "Parabens, você foi <span class='aprovado'>APROVADO!</span>";
    } else if ($media < 4) {
        echo "Parabens, você foi <span class='reprovado'>REPROVADO </span>";
    } else if ($media >= 4 && $media <= 6) {
        echo "Parabens, você está <span class='recuperacao'>DE RECUPERAÇÃO</span>";
    }

    ?>

</body>

</html>