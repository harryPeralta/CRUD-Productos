
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container"> 
        <h1>Marcas</h1>
        <a href="index.php?control=marca&action=insert" class="btn btn-success">Crear nuevo</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Proveedor</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['marcas'] as $marca) {  ?>
                    <tr>
                        <td><?= $marca['id'] ?></td>
                        <td><?= $marca['nombre'] ?></td>
                        <td><?= $marca['proveedor'] ?></td>
                        <td>
                            <a href="index.php?control=marca&action=edit&id=<?= $marca['id'] ?>" class="btn btn-warning">Actualizar</a>
                            <a href="index.php?control=marca&action=delete&id=<?= $marca['id'] ?>" class="btn btn-danger">Eliminar</a>
                            <a href="index.php?control=marca&action=view&id=<?= $marca['id'] ?>" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
