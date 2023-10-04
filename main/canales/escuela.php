<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCUELA</title>
</head>
<body>
<div class="card">
    <div class="card-header">
        Crear Canal Educativo
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre de la Escuela</label>
              <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el Nombre:">
            </div>
            <div class="mb-3">
              <label for="numeroEsc" class="form-label">Numero de la Escuela</label>
              <input type="text"
                class="form-control" name="numeroEsc" id="numeroEsc" aria-describedby="helpId" placeholder="INgrese el CUE:">
            </div>
            <div class="mb-3">
              <label for="localidad" class="form-label">Localidad</label>
              <input type="text"
                class="form-control" name="localidad" id="localidad" aria-describedby="helpId" placeholder="Ingrese la localidad:">
            </div>
            <div class="mb-3">
              <label for="numeroTelefono" class="form-label">Numero de Telefono</label>
              <input type="number"
                class="form-control" name="numeroTelefono" id="numeroTelefono" aria-describedby="helpId" placeholder="Ingrese el Numero de telefono:">
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email"
                class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Ingrese el Correo:">
            </div>
            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña</label>
              <input type="text"
                class="form-control" name="contraseña" id="contraseña" aria-describedby="helpId" placeholder="Ingrese la Contraseña:">
            </div>
            <div class="mb-3">
              <label for="url" class="form-label">URL</label>
              <input type="url"
                class="form-control" name="url" id="url" aria-describedby="helpId" placeholder="Ingrese la URL:">
            </div>
            <div class="mb-3">
              <label for="imagen" class="form-label">Imagen</label>
              <input type="text"
                class="form-control" name="imagen" id="imagen" aria-describedby="helpId" placeholder="Ingrese la Imagen:">
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input type="text"
                class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <button type="submit" class="btn btn-success">Add</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancel</a>
        </div>
    </form>
    <div class="card-footer text-muted"></div>
</div>
</body>
</html>