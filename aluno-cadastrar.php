<?php
echo '<h1>Cadastro de Aluno</h1>';

echo '<pre>';
var_dump($_POST);
echo '</pre>';

$nomeFormulario = isset($_POST['nome']) ? $_POST['nome'] : null;

if ($nomeFormulario === null) {
    die('Erro: O campo Nome é obrigatório.');
}

$dsn = 'mysql:dbname=bd_chamadinha;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$insert = 'INSERT INTO tb_alunos (nome) VALUE (:nome)';
$box = $banco->prepare($insert);
$box->execute([':nome' => $nomeFormulario]);

$id_aluno = $banco->lastInsertId();

echo $id_aluno;

$telFormulario = isset($_POST['telefone']) ? $_POST['telefone'] : null;
$emailFormulario = isset($_POST['email']) ? $_POST['email'] : null;
$nascFormulario = isset($_POST['nasc']) ? $_POST['nasc'] : null;
$frequenteFormulario = isset($_POST['frequente']) ? $_POST['frequente'] : null;
$imgFormulario = isset($_POST['img']) ? $_POST['img'] : null;

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
?>
