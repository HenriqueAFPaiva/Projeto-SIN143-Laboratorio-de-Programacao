<?php

//###############################
//# Inserir novo registro  
//###############################

include('connection.php');

$hostID = $_POST['id'];
$descricao = $_POST['desc'];
$titulo = $_POST['titulo'];


$sql = "INSERT INTO tipo_hospedagem (hostID, descricao, titulo) VALUES ($hostID, '$descricao', '$titulo')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: cadastro.php");
exit();

?>