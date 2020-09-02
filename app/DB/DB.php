<?php
/**
 * Created by PhpStorm.
 * User: Viktorija
 * Date: 01.09.2020
 * Time: 22:11
 */

class DB
{
    public function connect($sql) {
        $serverName = "localhost"; // хост
        $userName = "root"; // ім'я користувача
        $password = ""; // пароль

        $dbName = "Food"; //ім'я бази даних

        try {
            $conn = new PDO("mysql:host=$serverName; dbname=$dbName;", $userName, $password);

            //Установка режим помилок PDO в виняток
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $conn->exec($sql);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

// Закрити підключення
        $conn = null;
    }

}