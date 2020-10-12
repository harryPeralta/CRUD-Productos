<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Modificar producto</title>
</head>
<body>

    <div class="container">
        <h1>Modificar producto</h1>
        <form action="index.php?control=producto&action=update" method="post">
            <input type="hidden" name="id" value=<?php echo $data["id"]; ?>>
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value=<?php echo $data["producto"]["nombre"]; ?>>
            </div>
            <div>
                <label for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" value=<?php echo $data["producto"]["marca"]; ?>>
            </div>
            <div>
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" value=<?php echo $data["producto"]["precio"]; ?>>
            </div>
            <div>
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" value=<?php echo $data["producto"]["cantidad"]; ?>>
            </div>
            <button type="sumbit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
</body>
</html>