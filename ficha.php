<?php //abre o PHP
 
$id_alunos = $_GET['id_alunos']; //puxa a tabela id_alunos

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost'; //conexão com o banco
$user = 'root'; //fala qual usuário vai usar
$password = ''; //qual senha usará

$banco = new PDO($dsn, $user, $password); //faz a coneção com todas as informações dadas

$select = 'SELECT tb_info_alunos.*, tb_alunos.Alunos FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.Id = tb_info_alunos.id_alunos WHERE tb_info_alunos.id_alunos=' .$id_alunos; //seleciona todas as informações necessárias das tabelas

$dados = $banco->query($select)->fetch(); //prepara e faz a execução

echo '<pre>'; //para depuração

?> <!-- fecha o PHP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!--faz o link com o bootstrap -->

<main class="container my-5 d-flex justify-content-center align-items-center min-vh-100"> <!-- classe principal da pagina, contém itens em bootstrap -->
    <div class="text-center"> <!-- div que vai agrupar todo formulario, junto com a foto, contém itens bootstrap para estilização -->
        <img src="./assets/img/<?= $dados['img']?>" alt="Imagem do perfil" style="padding-bottom: 40px; width: 400px; height: 400px;"> <!-- a imagem da pessoa selecionada -->
        <form action="#" style="max-width: 100%;"> <!-- abre o formulário-->
            <section class="coluna" style="display: block,;">
                <div class="mb-3">
                    <label for="Alunos" class="form-label">Nome</label>
                    <input type="text" value="<?=$dados['Alunos']?>" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                </div>
                <div class="mb-3">
                    <label for="Telefone" class="form-label">Telefone</label>
                    <input type="number" value="<?= $dados['telefone'] ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" value="<?= $dados['email'] ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                </div>
                <div class="mb-3">
                    <label for="data_nascimento">Data de nascimento</label>
                    <input type="date" value="<?= $dados['nascimento'] ?>" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled>
                </div>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-success" for="btncheck2">Frequência</label>
                </div>
            </section>
        </form>
    </div>
</main>