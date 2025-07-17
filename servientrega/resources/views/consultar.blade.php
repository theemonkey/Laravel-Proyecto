<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Consultar Envío</title>
</head>
<body>
    <div class="container">
        <h2>Consultar Envío</h2>
        <form action="/consultar" method="POST">
            @csrf
            <div class="form-group">
                <label for="numero_guia">Número de Guía:</label>
                <input type="text" class="form-control" name="numero_guia" required>
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
    </div>
</body>
</html>
