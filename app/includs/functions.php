<?php
require_once (ROOT_PATH . '/DB/DB.php');
require_once (ROOT_PATH. '../DB/connection.php');

 function getAllFoods() {
     $serverName =$GLOBALS["serverName"];
     $dbName = "Food";
     $userName = $GLOBALS["userName"];
     $password = $GLOBALS["password"];

     try {
         $conn = new PDO("mysql:host=$serverName; dbName=$dbName;", $userName, $password);

         //Установка режим помилок PDO в виняток
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "SELECT * FROM Food.article";
         $sth = $conn->prepare($sql);
         $sth->execute();
      $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
    // var_dump($result);

     }
     catch(PDOException $e)
     {
         echo $sql . "<br>" . $e->getMessage();
     }

// Закрити підключення
     $conn = null;
     return $result;
    }

