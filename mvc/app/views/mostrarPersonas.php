<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-sm p-3">
        <div class="row">
            <div class="col-8">
                <h1>Personas</h1>
            </div>
            <div class="col-4">
                <a href="/mvc/public/crear" class="btn btn-success px-2">Crear nuevo persona</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nombre</th>
                    <th>direccion</th>
                    <th>edad</th>
                    <th>acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($persona as $item):?>
                <tr>
                    <td><?=$item["id_persona"]?></td>
                    <td><?=$item["nombre"]?></td>
                    <td><?=$item["direccion"]?></td>
                    <td><?=$item["edad"]?></td>
                    <td>
                        <a href="/mvc/public/editar/<?=$item["id_persona"]?>" class="btn btn-warning">Editar</a>
                        <a href="/mvc/public/eliminar/<?=$item["id_persona"]?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach?> 
            </tbody>
        </table>
    </div>
</body>
</html>