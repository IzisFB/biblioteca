<?php
// MODELO DE BANCO DE DADOS PHP
$servidor= "localhost"; //VARIAVEL PARA SERVIDOR
$usuario= "root"; // VARIAVEL DO USUARIO DO SQL
$senha= ""; // VARIAVEL DA SENHA DO SQL
$dbname= "cadastro"; // VARIAVEL NOME DA TABELA CRIADA NO MYSQL
// Criar conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname); //VARIAVEL DA CONEXÃO INCLUINDO AS VARIAVEIS
// Checar conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error()); //MENSAGEM DE ERRO
}
?>