<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="container">
    <?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_DEFAULT);
    $email = filter_input(INPUT_GET, "email", FILTER_DEFAULT);
    $backgroundColor = filter_input(INPUT_GET, "backgroundColor", FILTER_DEFAULT);

    ?>

    <h1>Destino GET</h1>

    <p>Nome informado: <?= $nome ?></p>
    <p>Email: <?= $email ?></p>

    <a href="destino-get.php?nome=Eder Pansani&email=ederpansani@gmail.com&backgroundColor=<?= $backgroundColor ?>">Eder Pansani</a>
    <br>
    <a href="destino-get.php?nome=Thales Mantovani&email=thalesmantovani@gmail.com&backgroundColor=<?= $backgroundColor ?>">Thales Mantovani</a>
    <br>
    <br>
    <br>
    <a href="destino-get.php?nome=<?= $nome ?>&email=<?= $email ?>&backgroundColor=lightblue">Fundo azul clarinho</a>
    <br>
    <a href="destino-get.php?nome=<?= $nome ?>&email=<?= $email ?>&backgroundColor=lightgreen">Fundo verde clarinho</a>
    <br>
    <a href="destino-get.php?nome=<?= $nome ?>&email=<?= $email ?>&backgroundColor=lightcoral">Fundo vermelho clarinho</a>
    <br>
    <style>
        .container {
            background-color: <?= $backgroundColor ?>
        }
    </style>
</body>

</html>