<?php
    $allowedDoms = "http://localhost:3000";
    header("Access-Control-Allow-Origin: $allowedDoms");
    header("Access-Control-Allow-Headers: content-type");
    header("Access-Control-Allow-Methods: OPTIONS,GET,PUT,POST,DELETE");
?>