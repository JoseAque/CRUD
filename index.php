<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD CON PHP, PDO, AJAX Y DATA TABLES.JS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/css/styles.css">
</head>

<body>

  <div class="container fondo">

    <h1 class="text-center">CRUD CON PHP, PDO, AJAX Y DATA TABLES.JS</h1>

    <!--<h1 class="text-center">www.render2web.com</h1> -->
    <div class="row">
      <div class="col-2 offset-10">
        <div class="text-center">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
            <i class="bi bi-plus-circle fill"></i> Crear
          </button>

        </div>
      </div>

    </div>
    <br />
    <br />

    <div class="table-responsive">
      <table id="datos_usuario" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Imagen</th>
            <th>Fecha de Creación</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Crear usuario</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="POST" id="formulario" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-body">
              <label for="nombre">Ingresa el nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control">
              <br />

              <label for="apellidos">Ingresa los apellidos</label>
              <input type="text" name="apellidos" id="apellidos" class="form-control">
              <br />

              <label for="telefono">Ingresa el teléfono</label>
              <input type="text" name="telefono" id="telefono" class="form-control">
              <br />

              <label for="email">Ingresa el email</label>
              <input type="email" name="email" id="email" class="form-control">
              <br />

              <label for="imagen">Selecciona una imagen</label>
              <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
              <span id="imagen-subida"></span>
              <br />
            </div>

            <div class="modal-footer">
              <input type="hidden" name="id_usuario" id="id_usuario">
              <input type="hidden" name="operacion" id="operacion">
              <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var dataTable = $('#datos_usuario').DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
          url: "inc/obtener_registros.php",
          type: "POST"
        },
        "columsDefs": [{
          "targets": [0, 3, 4],
          "orderable": false,
        }, ]
      });
    });
  </script>
</body>

</html>