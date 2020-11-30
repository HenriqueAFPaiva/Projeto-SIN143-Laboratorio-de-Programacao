<?php

//###############################
//# Remover registro
//###############################

include('connection.php');


$id = $_GET['ID'];

$sql = "DELETE FROM tipo_hospedagem WHERE ID=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record removed successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header("Location: cadastro.php");
exit();

?>