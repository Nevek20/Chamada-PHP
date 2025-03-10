<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- faz conexão com o boostrap -->
<?php //abre o php

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost'; //conexão com o banco
$user = 'root'; //usuario
$password = ''; //senha

$banco = new PDO($dsn, $user, $password); //puxa tudo

$select = 'SELECT * FROM tb_alunos'; //seleciona na tabela alunos tudo
$resultado = $banco->query($select)->fetchALL(); //consulta e extrai o resultado
 
//echo '<pre>';
//var_dump ($resultado);
?> <!-- acaba o php -->
<main class="container my-5"> <!-- abre o main -->
    <table class="table table-striped"> <!-- abre uma tabela -->
    <button><a href="./form.php">Criar novo aluno</a></button> <!-- coloca um botão pra criar um novo aluno -->
        <tr> <!-- abre uma linha -->
            <td>ID</td> <!-- coloca uma coluna chamada ID -->
            <td>Nome</td> <!-- coloca uma coluna chamada Nome -->
            <td>Ações</td> <!-- coloca uma coluna chamada Ações -->
        </tr> <!-- fecha a linha -->
    <?php foreach($resultado as $lista) { ?> <!-- puxa do banco e coloca na lista -->
        <tr> <!-- abre a linha -->
            <td> <?= $lista ['Id'] ?> </td> <!-- bota o ID no ID -->
            <td> <?php echo $lista ['Alunos'] ?> </td> <!-- bota o nome no alunos -->
            <td> <!-- abre a coluna -->
                <a href="./ficha.php?id_alunos=<?= $lista['Id'] ?>" class="btn btn-primary">Abrir</a> <!-- botao de abrir -->
                <a href="./form-editar.php?Id_aluno_alterar=<?= $lista['Id']?>" class="btn btn-warning">Editar</a>  <!-- botao de editar -->
                <a href="./aluno-deletar.php?Id=<?= $lista['Id']?>" class="btn btn-danger">Excluir</a>  <!-- botao de excluir-->
            </td> <!-- fecha a coluna -->
        </tr> <!-- fecha a linha -->
    <?php } ?> <!-- fecha o php -->
    </table> <!-- fecha a table -->
</main> <!-- fecha o main -->
