<?php
// Створення підключення і створення бази даних
require_once (__DIR__ . '/connection.php');

try {
    $conn = new PDO("mysql:host=$serverName;", $userName, $password);

    //Установка режим помилок PDO в виняток
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Створення бази данних - Draughts
    $sql = "CREATE DATABASE IF NOT EXISTS Food";

    $conn->exec($sql);
}
catch(PDOException $e) // клас винятків
{
    echo $sql . "<br>" . $e->getMessage();
}

// Закрити підключення
$conn = null;
?>