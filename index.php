<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_alunos';
$resultado = $banco->query($select)->fetchALL();

//echo '<pre>';
//var_dump ($resultado);
?>
<main class="container my-5">
    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Ações</td>
        </tr>
    <?php foreach($resultado as $lista) { ?>
        <tr>
            <td> <?= $lista ['Id'] ?> </td>
            <td> <?php echo $lista ['Alunos'] ?> </td>
            <td>
                 <a href="#" class="btn btn-primary">Abrir</a>
                <a href="#" class="btn btn-warning">Editar</a> 
                <a href="#" class="btn btn-danger">Excluir</a> 
            </td>
        </tr>
    <?php } ?>
    </table>
</main>