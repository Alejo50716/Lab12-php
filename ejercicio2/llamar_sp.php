<?php
/**
 * Lab 12 - Ejercicio 2: Llamar procedimientos almacenados desde PHP
 * Completa las secciones marcadas con TODO.
 */
require_once '../ejercicio1/config_db.php';
require_once '../ejercicio1/config_semilla.php';

$conn = conectar();
$datos = generar_datos(SEMILLA);

$nota_minima = 60.00;

// TODO: Llamar al procedimiento sp_insertar_estudiante
// con $datos['nombre'] y $datos['nota']
// Pista: $conn->query("CALL sp_insertar_estudiante(?, ?)") con sentencia preparada
//        O bien: $conn->query("CALL sp_insertar_estudiante('{$datos['nombre']}', {$datos['nota']})")
//        (en este caso el valor no viene del usuario, sino de la semilla; justifica tu elección)

// TODO: Mostrar mensaje de confirmación con el formato exacto:
// "Procedimiento ejecutado: sp_insertar_estudiante('{nombre}', {nota})"

// TODO: Llamar a sp_reporte_aprobados con $nota_minima

// TODO: Mostrar los resultados en una tabla HTML con:
//   - clase CSS "tabla-reporte" en el <table>
//   - clase "fila-aprobado" en <tr> si nota >= 70
//   - clase "fila-minimo" en <tr> si nota < 70
//   - columnas: ID | Nombre | Nota

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lab 12 - Ejercicio 2</title>
    <style>
        /* TODO: Agregar estilos para .tabla-reporte, .fila-aprobado, .fila-minimo */
        body { font-family: Arial, sans-serif; margin: 20px; }
        .tabla-reporte { border-collapse: collapse; width: 100%; }
        .tabla-reporte th, .tabla-reporte td { border: 1px solid #ccc; padding: 8px; }
        .tabla-reporte th { background-color: #4a90d9; color: white; }
        /* TODO: .fila-aprobado y .fila-minimo */
    </style>
</head>
<body>
    <!-- El PHP de arriba genera la salida aquí -->
</body>
</html>