<?php

echo '<h1>Aluno editar</h1>';

var_dump($_POST);

$editarId = $_POST['id'];
$editarNome = $_POST['nome'];
$editarTelefone = $_POST['telefone'];
$editarEmail = $_POST['email'];
$editarNascimento = $_POST['nasc'];

$dsn = 'mysql:dbname=bd_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$update = 'UPDATE tb_alunos SET Alunos = :Alunos WHERE Id = :Id';

$banco->prepare($update)->execute([
    ':Id' => $editarId,
    ':Alunos' => $editarNome
]);

$update2 = 'UPDATE tb_info_alunos SET telefone = :telefone, email = :email, nascimento = :nascimento WHERE Id = :Id';

$banco->prepare($update2)->execute([
    ':Id' => $editarId,
    ':telefone' => $editarTelefone,
    ':email' => $editarEmail,
    ':nascimento' => $editarNascimento
]);