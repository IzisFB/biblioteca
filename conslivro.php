<?php
include ("bancodedados.php");

$clivro= $_POST['clivro'];

//esse variavel utiliza a seleção de todos os dados da tabela, nesse caso d0o aluno no BD, 'where=onde' quer pesquisar, a escolha foi 'Matricula'  
$result_livro = "SELECT * FROM livro WHERE Nome_livro LIKE '%$clivro%' LIMIT 5";
//no LIKE (entre) para pesquisar na variavel de consulta e usa % para ele pesquisar antes e depois da palavra a ser pesquisada e o limit é limitado a de 5 linhas.

// agora ele vai exercutar a consulta nas variaveis informadas no mysql
$resultado_livro = mysqli_query($conn, $result_livro);

//para ler as informações consultadas, utiliza o while (enquanto) fetch array (buscar) para ler as informações que estão na variavel result_aluno
while ($rows_livro = mysqli_fetch_array($resultado_livro)){
    echo "Nome do livro: ". $rows_livro ['Nome_livro'] . "<br>";
    echo "Código do livro: ". $rows_livro ['Cod'] . "<br>";
    echo "Autor: ". $rows_livro ['Autor'] . "<br>";
    echo "Ano: ". $rows_livro ['Ano'] . "<br>";
}
?>