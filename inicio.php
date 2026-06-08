<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Plantas</title>
</head>
<body>

<h2>Registro de Plantas</h2>

<form action="guardar.php" method="POST">

    <label>Nombre Persona:</label>
    <input type="text" name="nombre_persona" required><br><br>

    <label>Nombre Planta:</label>
    <input type="text" name="nombre_planta" required><br><br>

    <label>Tipo Planta:</label>
    <input type="text" name="tipo_planta"><br><br>

    <label>Polinizador que atrae:</label>
    <input type="text" name="polinizador_atrae"><br><br>

    <label>Ubicación:</label>
    <input type="text" name="ubicacion"><br><br>

    <label>Fecha Siembra:</label>
    <input type="date" name="fecha_siembra"><br><br>

    <label>Frecuencia Riego:</label>
    <input type="text" name="frecuencia_riego"><br><br>

    <label>Observaciones:</label>
    <textarea name="observaciones"></textarea><br><br>

    <button type="submit">Guardar</button>

</form>

</body>
</html>
