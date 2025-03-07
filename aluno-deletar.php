<?php //abre o PHP
$dsn = 'mysql:dbname=bd_chamadinha;host=localhost'; //conexão no banco
$user = 'root'; //usa usuário própio
$password = ''; //bota a senha

$banco = new PDO($dsn, $user, $password); //puxa as informações

$idForm = $_GET['Id']; //puxa o ID do banco
 
$delete = 'DELETE FROM tb_alunos WHERE Id = :id'; //vê o id inserido, e a paga no banco o id certinho
$box = $banco->prepare($delete); //prepara o SQL
$box->execute([ //executa o SQL
    ':id' => $idForm //executa o ID
]); //fecha a execução

//delete na tb_info_alunos
$delete = 'DELETE FROM tb_info_alunos WHERE id_alunos = :id_alunos'; //faz o mesmo, so que na tb_info_alunos
$box = $banco->prepare($delete); //prepara o SQL
$box->execute([ //executa o SQL
    ':id_alunos' => $idForm //apaga o ID
]); //fecha a execução

echo '<script> //abre o script
    alert("Usuário apagado com sucesso!!") //mostra na tela q foi apagado com sucesso
    window.location.replace("index.php") //volta pro index
</script>'; //acabou o script