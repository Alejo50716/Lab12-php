<?php
/**
 * Lab 12 - Ejercicio 1: Versión SEGURA con sentencias preparadas
 * Completa las secciones marcadas con TODO.
 */
require_once 'config_db.php';
require_once 'config_semilla.php';

$conn = conectar();
$datos = generar_datos(SEMILLA);
$nombre_buscar = $_GET['nombre'] ?? $datos['nombre'];

// TODO: Reemplaza la consulta concatenada por una sentencia preparada
// Pista: $stmt = $conn->prepare("SELECT * FROM estudiantes WHERE nombre = ?");
// Pista: $stmt->bind_param('s', $nombre_buscar);
// Pista: $stmt->execute();
// Pista: $resultado = $stmt->get_result();

echo "<h2>Búsqueda (SEGURA)</h2>";

// TODO: Muestra los resultados usando fetch_assoc() sobre $resultado
// (misma lógica que inseguro.php, pero usando la sentencia preparada)

$conn->close();