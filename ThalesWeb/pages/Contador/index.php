<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body class="container">

    <form action="destino.php" method="post">
        <div class="form-group col-md-8">
            <h1>Praticando 2 - Contador</h1>
        </div>

        <div class="form-group col-md-6">
            <label for="inicio">Início:</label>
            <input type="number" id="inicio" name="inicio" class="form-control" required />
        </div>
        <div class="form-group col-md-6">
            <label for="final">Final:</label>
            <input type="number" id="final" name="final" class="form-control" required />
        </div>
        <div class="form-group col-md-6">
            <label for="incremento">Incremento:</label>
            <input type="number" id="incremento" name="incremento" class="form-control" required />
        </div>

        <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>

    </form>


</body>

</html>