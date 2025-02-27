<?php
$dsn = 'mysql:dbname=bd_chamadinha;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$idForm = $_GET['Id'];

//deleção na tb_alunos
$delete = 'DELETE FROM tb_alunos WHERE Id = :id';
$box = $banco->prepare($delete);
$box->execute([
    ':id' => $idForm
]);

//deleção na tb_info_alunos
$delete = 'DELETE FROM tb_info_alunos WHERE id_alunos = :id_alunos';
$box = $banco->prepare($delete);
$box->execute([
    ':id_alunos' => $idForm
]);

echo '<script>
    alert("Usuário apagado com sucesso!!") 
    window.location.replace("index.php")
</script>';