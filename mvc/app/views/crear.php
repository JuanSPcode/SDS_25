<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-sm p-3">

        <form action="/mvc/public/guardar" method="post" class="form container-sm" style="width: 500px;">
                    <h1>Crear nuevos usuarios</h1>

        <?php if(isset($error)):?>
            <div class="alert">
                <p>$error</p>
            </div>
        <?php endif?>
            <label for="nombre">Ingrese su nombre</label>
            <div>
                <input class="form-control mb-3" type="text" name="nombre" id="nombre" require>
            </div>
            <label for="direccion">Ingrese su direccion</label>
            <div>
                <input class="form-control mb-3" type="text" name="direccion" id="direccion" require>
            </div>
            <label for="edad">Ingrese su edad</label>
            <div>
                <input class="form-control mb-3" type="number" name="edad" id="edad" min="0" max="100" require>
            </div>

            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</body>
</html>