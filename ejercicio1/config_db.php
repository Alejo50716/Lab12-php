<?php
/**
 * Lab 12 - Configuración de conexión a la base de datos
 * Este archivo se incluye en config.php (que está en .gitignore).
 * Ajusta el host, usuario y contraseña según tu instalación de XAMPP.
 */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');         // En XAMPP por defecto la contraseña es vacía
define('DB_NAME', 'lab12_db');

function conectar(): mysqli {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die('Error de conexión: ' . $conn->connect_error);
    }
    $conn->set_charset('utf8mb4');
    return $conn;
}