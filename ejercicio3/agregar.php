<?php
/**
 * Lab 12 - Ejercicio 3: Agregar estudiante
 * Alta de estudiantes.
 */
require_once '../ejercicio1/config_db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $nota   = $_POST['nota'] ?? '';

    if ($nombre === '' || strlen($nombre) > 100 || !is_numeric($nota) || (float)$nota < 0 || (float)$nota > 100) {
        $error = 'Escribe un nombre válido y una nota entre 0 y 100.';
    }

    if (empty($error)) {
        $conn = conectar();
        $valor_nota = (float)$nota;
        $stmt = $conn->prepare('INSERT INTO estudiantes (nombre, nota) VALUES (?, ?)');
        $stmt->bind_param('sd', $nombre, $valor_nota);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lab 12 - Agregar Estudiante</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <nav>
        <a href="index.php">← Volver a la lista</a>
    </nav>

    <h1>Agregar Estudiante</h1>

    <?php if ($error): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" action="agregar.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"
               value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>" required>

        <label for="nota">Nota (0–100):</label>
        <input type="number" id="nota" name="nota" min="0" max="100" step="0.01"
               value="<?= htmlspecialchars($_POST['nota'] ?? '') ?>" required>

        <button type="submit">Agregar</button>
    </form>
</body>
</html>
