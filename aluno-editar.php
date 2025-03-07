<?php //abre o PHP

echo '<h1>Aluno editar</h1>'; // escreve no site o título 

var_dump($_POST); //faz a depuração


$editarId = $_POST['id']; // Recebe o id do aluno da URL
$editarNome = $_POST['nome']; // Recebe o nome do aluno da URL
$editarTelefone = $_POST['telefone']; // Recebe o telefone do aluno da URL
$editarEmail = $_POST['email']; // Recebe o email do aluno da URL
$editarNascimento = $_POST['nasc']; // Recebe a data de nascimento do aluno da URL

$dsn = 'mysql:dbname=bd_chamadinha;host=127.0.0.1'; //conexão no banco
$user = 'root'; //usa usuário própio
$password = ''; //bota a senha

$banco = new PDO($dsn, $user, $password); //puxa as informações

$update = 'UPDATE tb_alunos SET Alunos = :Alunos WHERE Id = :Id'; //faz o update do banco

$banco->prepare($update)->execute([  //prepara uma consulta SQL e a executa
    ':Id' => $editarId, //executa o id
    ':Alunos' => $editarNome //executa o nome
]);

$update2 = 'UPDATE tb_info_alunos SET telefone = :telefone, email = :email, nascimento = :nascimento WHERE Id = :Id'; //faz o update na outra tabela

$banco->prepare($update2)->execute([ //prepara uma consulta SQL e a executa
    ':Id' => $editarId, //executa o id
    ':telefone' => $editarTelefone, //executa o telefoe
    ':email' => $editarEmail, //executa o email
    ':nascimento' => $editarNascimento //executa a data de nascimento
]);