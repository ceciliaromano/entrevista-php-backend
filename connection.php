<?php
    include_once("cors.php");

    $host = "localhost";
    $dbname = "entrevista";
    $user = "root";
    $pass = "";
    $port = 3307;

    $dsn = "mysql:host=$host;port=$port;$dbname=$dbname";

    try{
        $connection = new PDO($dsn, $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("SET CHARACTER SET utf8");

    } catch (PDOException $error){
        echo $error;
    }

    return $connection;
?>