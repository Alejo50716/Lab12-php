<?php
/**
 * Lab 12 - Ejercicio 3: Datos semilla para la aplicación web
 * Este archivo se ejecuta automáticamente al inicializar.
 * NO MODIFICAR - el autograde lo usa para verificar con distintas semillas.
 */
require_once '../ejercicio1/config_db.php';
require_once '../ejercicio1/config_semilla.php';

function sembrar_datos(mysqli $conn): void {
    // Limpiar datos previos de prueba para esta semilla
    $conn->query("DELETE FROM estudiantes WHERE nombre LIKE 'Seed_%'");

    srand(SEMILLA);
    $nombres_base = [
        'Lopez', 'Medina', 'Ramos', 'Perez', 'Torres',
        'Garcia', 'Castro', 'Vargas', 'Ruiz', 'Flores'
    ];
    $prefijos = ['Ana', 'Carlos', 'Maria', 'Jose', 'Laura',
                 'Luis', 'Sofia', 'Pedro', 'Diana', 'Miguel'];

    // Insertar 5 estudiantes de prueba
    for ($i = 0; $i < 5; $i++) {
        $nombre = 'Seed_' . $prefijos[($i + SEMILLA) % 10] . ' ' . $nombres_base[($i * 3 + SEMILLA) % 10];
        $nota   = round(50 + ($i * 7 + SEMILLA) % 51, 2);
        $stmt = $conn->prepare("INSERT INTO estudiantes (nombre, nota) VALUES (?, ?)");
        $stmt->bind_param('sd', $nombre, $nota);
        $stmt->execute();
        $stmt->close();
    }
}