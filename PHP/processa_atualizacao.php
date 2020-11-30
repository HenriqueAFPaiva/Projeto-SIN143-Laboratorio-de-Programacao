<?php

//###############################
//# Atualizar registro
//###############################

include('connection.php');

$id = $_POST['ID'];

$titulo = $_POST['titulo'];
$hostID = $_POST['hostID'];
$descricao = $_POST['descricao'];


$sql = "UPDATE tipo_hospedagem SET hostID=$hostID, titulo='$titulo', descricao='$descricao' WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  echo $id;
  echo $hostID;
  echo $descricao;
  echo $titulo;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: cadastro.php");
exit();

?>