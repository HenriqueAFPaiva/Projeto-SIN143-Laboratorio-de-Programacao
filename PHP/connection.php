<?php

//###############################
//# Conexão com banco de dados  
//###############################

$servername = "localhost";
$username = "henrique";
$password = "123456";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $conn -> select_db("sin143");
}

?>