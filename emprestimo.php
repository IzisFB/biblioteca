<?php
include ("bancodedados.php");

$cod= $_POST ['cod'];
$matricula= $_POST ['matricula'];


$sql="INSERT INTO emprestimo ( matricula, cod) 
      VALUES ('$matricula', '$cod')";

if(mysqli_query($conn, $sql)) {
      echo "Emprestimo realizado com sucesso";
} 
else {
      echo "Erro: " . mysqli_connect_error ($conn);
}
mysqli_close($conn);
