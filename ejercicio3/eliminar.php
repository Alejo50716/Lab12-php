<?php
/**
 * Lab 12 - Ejercicio 3: Eliminar estudiante
 * Implementa las secciones marcadas con TODO.
 */
require_once '../ejercicio1/config_db.php';

$conn = conectar();
$id   = (int)($_GET['id'] ?? 0);

if ($id <= 0) {
    header('Location: index.php');
    exit;
}

// TODO: Cargar nombre del estudiante con sentencia preparada (para mostrarlo en la confirmación)
$nombre_estudiante = "ID $id"; // Elimina cuando implementes

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirmar'])) {
    // TODO: DELETE con sentencia preparada
    // TODO: Redirigir a index.php
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lab 12 - Eliminar Estudiante</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <nav>
        <a href="index.php">← Volver a la lista</a>
    </nav>

    <h1>Eliminar Estudiante</h1>

    <p>¿Estás seguro de que deseas eliminar a
       <strong><?= htmlspecialchars($nombre_estudiante) ?></strong>?
    </p>

    <form method="POST" action="eliminar.php?id=<?= $id ?>">
        <button type="submit" name="confirmar" value="1">Sí, eliminar</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>