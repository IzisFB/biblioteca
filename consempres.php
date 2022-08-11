<?php
include ("bancodedados.php");

$cempresti= $_POST['cempresti'];

//esse variavel utiliza a seleção de todos os dados da tabela, nesse caso d0o aluno no BD, 'where=onde' quer pesquisar, a escolha foi 'Matricula'  
$result_empres = "SELECT * FROM emprestimo WHERE matricula LIKE '%$cempresti%' LIMIT 5";
//no LIKE (entre) para pesquisar na variavel de consulta e usa % para ele pesquisar antes e depois da palavra a ser pesquisada e o limit é limitado a de 5 linhas.

// agora ele vai exercutar a consulta nas variaveis informadas no mysql
$resultado_empres = mysqli_query($conn, $result_empres);

//para ler as informações consultadas, utiliza o while (enquanto) fetch array (buscar) para ler as informações que estão na variavel result_aluno
while ($rows_empres = mysqli_fetch_array($resultado_empres)){
    echo "Código do livro: ". $rows_empres ['cod'] . "<br>";
    echo "Matricula do aluno: ". $rows_empres ['matricula'] . "<br>";
}
?>