<?php

$db = mysqli_connect('localhost', 'u904102484_costos', 'u904102484_costos', 'Costo2025.');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
