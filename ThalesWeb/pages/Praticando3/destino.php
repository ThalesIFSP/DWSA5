<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .nome {

            font-weight: bold;
            font-size: 20px
        }
    </style>


</head>

<body class="container">
    <h1>Destino Animais</h1>
    <?php
    $click = filter_input(INPUT_GET, "click", FILTER_DEFAULT);
    $urlImage = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
    $info = filter_input(INPUT_GET, "info", FILTER_DEFAULT);

    echo "Você clicou no(a) <span class='nome'>$click</span>";
    echo "<br><br>$info"
    ?>
    <img height="500" width="750" src=<?= $urlImage ?> />
</body>

</html>