<?php

$servername = "localhost";
$database = "locadora";
$username = "user_locadora";
$password = "user%locadora#";

try {
    $conn = new mysqli($servername, $username, $password, $database);   
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados $database :" . $pe->getMessage());
}

