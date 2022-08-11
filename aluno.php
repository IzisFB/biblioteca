<?php
include ("bancodedados.php");

$matricula= $_POST ['Matricula'];
$nome= $_POST ['Nome'];
$turma= $_POST ['Turma'];


$sql="INSERT INTO aluno (Matricula, Nome, Turma) 
      VALUES ('$matricula','$nome', '$turma')";

if(mysqli_query($conn, $sql)) {
      echo "Novo registro criado com sucesso";
} 
else {
      echo "Erro: " . mysqli_connect_error ($conn);
}
mysqli_close($conn);


