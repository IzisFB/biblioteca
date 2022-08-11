<?php
include ("bancodedados.php");

$caluno= $_POST ['caluno'];

//esse variavel utiliza a seleção de todos os dados da tabela, nesse caso d0o aluno no BD, 'where=onde' quer pesquisar, a escolha foi 'Matricula'  
$result_aluno = "SELECT * FROM aluno WHERE Nome LIKE '%$caluno%' LIMIT 5";
//no LIKE (entre) para pesquisar na variavel de consulta e usa % para ele pesquisar antes e depois da palavra a ser pesquisada e o limit é limitado a de 5 linhas.

// agora ele vai exercutar a consulta nas variaveis informadas no mysql
$resultado_aluno = mysqli_query($conn, $result_aluno);

//para ler as informações consultadas, utiliza o while (enquanto) fetch array (buscar) para ler as informações que estão na variavel result_aluno
while ($rows_aluno = mysqli_fetch_array($resultado_aluno)){
    echo "Nome do aluno: ". $rows_aluno ['Nome'] . "<br>";
    echo "Turma: ". $rows_aluno ['Turma'] . "<br>";
    echo "Matrícula: ". $rows_aluno ['Matricula'] . "<br>";
}
//rows é a linha que irá pesquisar
?>