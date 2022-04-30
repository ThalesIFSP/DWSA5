<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="container">
    <?php
    $title = filter_input(INPUT_POST, "title", FILTER_DEFAULT);
    $body = filter_input(INPUT_POST, "body", FILTER_DEFAULT);
    $backgroundColor = filter_input(INPUT_POST, "backgroundColor", FILTER_DEFAULT);
    $textColor = filter_input(INPUT_POST, "textColor", FILTER_DEFAULT);
    $urlImage = filter_input(INPUT_POST, "urlImage", FILTER_DEFAULT);
    $urlLink = filter_input(INPUT_POST, "urlLink", FILTER_DEFAULT);
    ?>

    <h1><?= $title ?></h1>

    <p><?= $body ?></p>
    <br>
    <img src="<?= $urlImage ?>" />
    <br>
    <a href="<?= $urlLink ?>">
        <?= $urlLink ?>
    </a>

    <style>
        .container {
            background-color: <?= $backgroundColor ?>
        }

        p {
            color: <?= $textColor ?>
        }
    </style>
</body>

</html>