<?php 
    require_once("connection.php");
    
    $rest_json = file_get_contents('php://input');
    $_POST = json_decode($rest_json, true);
    $sql = "UPDATE entrevistadb.users SET email = '". $_POST["email"] ."', firstname = '". $_POST["firstname"] ."', lastname = '". $_POST["lastname"] ."', dni = '". $_POST["dni"] ."', imagen = '". $_POST["imagen"] ."' WHERE id = '". $_POST["id"] ."'";
    $result = $connection->prepare($sql);
    $result->execute();
    $result->closeCursor();
?>