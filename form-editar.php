<html lang="pt-br">
<style>
    form{
        padding-top: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        
    }
    img{
        width: 400px;
        height: 400px;
    }
</style>
<?php
$Id_aluno_alterar = $_GET['Id_aluno_alterar'];

var_dump($Id_aluno_alterar);

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT tb_info_alunos.*, tb_alunos.Alunos FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.Id = tb_info_alunos.id_alunos WHERE tb_info_alunos.id_alunos='.$Id_aluno_alterar;   

$dados = $banco->query($select)->fetch();
?>
<body>
    <main>
        <form action="./aluno-editar.php" method="POST">
            <h2>Formulário</h2>
            <img src="./assets/img/<?= $dados['img'] ?>" alt="imagem do aluno">
            <input type="hidden" placeholder="ID." name="id" value="<?= $dados['id'] ?>">
            <input type="text" placeholder="Nome." name="nome" value="<?= $dados['Alunos'] ?>">
            <input type="text" placeholder="Telefone." name="telefone" value="<?= $dados['telefone'] ?>">
            <input type="text" placeholder="E-mail." name="email" value="<?= $dados['email'] ?>">
            <input type="date" placeholder="Data de nascimento." name="nasc" value="<?= $dados['nascimento'] ?>">
            <div>
                <label>Frequente?</label>
                <input type="checkbox" name="frequente">
            </div>
            <input type="file" accept="image/*" name="img">
            <input type="submit">
        </form>
    </main>
</body>
</html>