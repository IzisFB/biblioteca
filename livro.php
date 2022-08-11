<?php

include("bancodedados.php");

$cod= $_POST ['Cod'];
$nlivro= $_POST ['Nome_livro'];
$autor= $_POST ['Autor'];
$ano= $_POST ['Ano'];


$sql="INSERT INTO livro (Cod, Nome_livro, Autor, Ano) 
      VALUES ('$cod', '$nlivro', '$autor', '$ano')";

if(mysqli_query($conn, $sql)) {
      echo "Novo registro criado com sucesso";
} 
else {
      echo "Erro: " . mysqli_connect_error ($conn);
}
mysqli_close($conn);
?>