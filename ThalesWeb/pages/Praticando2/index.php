<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



</head>

<body class="container">

    <form action="destino.php" method="post">
        <div class="form-group col-md-6">
            <h1>Praticando 2</h1>
        </div>

        <div class="form-group col-md-6">
            <label for="n1">Nota 1:</label>
            <input type="number" id="n1" name="n1" class="form-control" step="0.5" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="n2">Nota 2:</label>
            <input type="number" id="n2" name="n2" class="form-control" step="0.5" value="0" />
        </div>

        <div class="form-group col-md-6">
            <label for="n2">Nota 3:</label>
            <input type="number" id="n3" name="n3" class="form-control" step="0.5" value="0" />
        </div>

        <div class="form-group col-md-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </div>

    </form>


</body>

</html>