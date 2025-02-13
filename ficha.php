<?php 

$id_alunos = $_GET['id_alunos'];

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_info_alunos WHERE id_alunos = ' . $id_alunos;

$dados = $banco->query($select)->fetch();

echo '<pre>';
var_dump($dados);

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<main class="container my-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="text-center">
        <img src="./assets/img/rias.webp" alt="Imagem do perfil" style="padding-bottom: 40px;">

        <form action="#" style="max-width: 100%;">
            <section class="coluna" style="display: block,;">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" value="<?php echo $dados['nome'] ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                </div>
                <div class="mb-3">
                    <label for="Telefone" class="form-label">Telefone</label>
                    <input type="number" value="<?php echo $dados['telefone'] ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" value="<?php echo $dados['email'] ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                </div>
                <div class="mb-3">
                    <label for="data_nascimento">Data de nascimento</label>
                    <input type="date" value="<?php echo $dados['nascimento'] ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                </div>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-success" for="btncheck2">Frequência</label>
                </div>
            </section>
        </form>
    </div>
</main>