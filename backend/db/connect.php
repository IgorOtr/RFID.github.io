<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    try {

    $conn = new PDO("mysql:host=$servername;dbname=quick_rfid", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'Conexão feita com sucesso...';
    
    } catch(PDOException $e) {
        
    echo "Connection failed: " . $e->getMessage();
}
