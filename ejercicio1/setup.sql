-- Lab 12 - Ejercicio 1: Setup de la base de datos
-- Ejecutar en phpMyAdmin o MySQL Workbench antes de comenzar

CREATE DATABASE IF NOT EXISTS lab12_db
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE lab12_db;

DROP TABLE IF EXISTS estudiantes;

CREATE TABLE estudiantes (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    nombre     VARCHAR(100) NOT NULL,
    nota       DECIMAL(5,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;