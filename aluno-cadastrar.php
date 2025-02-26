<?php
echo '<h1>Cadastro de Aluno</h1>';

echo'<pre>';
var_dump(
    $_POST
);

$nomeFormulario = $_POST['nome'];

$dsn = 'mysql:dbname=bd_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insert = 'INSERT INTO tb_alunos (nome) VALUE (:nome)';

$box = $banco->prepare($insert);

$box->execute([
    ':nome' => $nomeFormulario
]);

$id_aluno = $banco->lastInsertId();

echo $id_aluno;

$telFormulario = $_POST['telefone'];
$emailFormulario = $_POST['email'];
$nascFormulario = $_POST['nasc'];
$frequenteFormulario = $_POST['frequente'];
$id_aluno = $banco->lastInsertId();
$imgFormulario = $_POST['img'];

$insert = 'INSERT INTO tb_info_alunos (telefone, email, nascimento, frequente, id_alunos, img) VALUE (:telefone, :email, :nascimento, :frequente, :id_alunos, :img)';

$box = $banco->prepare($insert);

$box->execute([
    ':telefone' => $telFormulario,
    ':email' => $emailFormulario,
    ':nascimento' => $nascFormulario,
    ':frequente' => $frequenteFormulario,
    ':id_alunos' => $id_aluno,
    ':img' => $imgFormulario,
]);