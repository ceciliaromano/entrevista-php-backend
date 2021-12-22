<?php
    require_once("connection.php");
    
    $rest_json = file_get_contents('php://input');
    $_POST = json_decode($rest_json, true);
    $sql = "SELECT * FROM entrevistadb.users WHERE id = '". $_POST["id"] ."'";
    $result = $connection->prepare($sql);
    $result->execute();

    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $json_array[] = $row;
    }

    echo json_encode($json_array);

    $result->closeCursor();
?>