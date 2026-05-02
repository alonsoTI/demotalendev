<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">

    <h1 class="mb-4 text-center">Registro de Usuarios</h1>

    <!-- Formulario -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form method="post" action="">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo</label>
                    <input type="email" name="correo" class="form-control" required>
                </div>

                <button class="btn btn-primary w-100">Registrar</button>
            </form>
        </div>
    </div>

    <!-- Tabla de usuarios -->
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-3">Usuarios registrados</h4>

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Datos estáticos por ahora -->
                    <tr>
                        <td>1</td>
                        <td>Juan</td>
                        <td>Pérez</td>
                        <td>juan@example.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
