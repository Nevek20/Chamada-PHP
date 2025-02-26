<?php 

// Verifica se "id_alunos" foi passado na URL
$id_alunos = isset($_GET['id_alunos']) ? $_GET['id_alunos'] : null;

if ($id_alunos === null) {
    die('Erro: ID do aluno não foi fornecido.');
}

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost';
$user = 'root';
$password = '';

try {
    $banco = new PDO($dsn, $user, $password);
    $banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta protegida contra SQL Injection
    $select = 'SELECT tb_info_alunos.*, tb_alunos.Alunos 
               FROM tb_info_alunos 
               INNER JOIN tb_alunos ON tb_alunos.Id = tb_info_alunos.id_alunos 
               WHERE tb_info_alunos.id_alunos = :id_alunos';

    $stmt = $banco->prepare($select);
    $stmt->execute([':id_alunos' => $id_alunos]);
    $dados = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$dados) {
        die('Erro: Nenhum aluno encontrado com esse ID.');
    }

} catch (PDOException $e) {
    die('Erro ao conectar com o banco de dados: ' . $e->getMessage());
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<main class="container my-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="text-center">
        <img src="./assets/img/<?= htmlspecialchars($dados['img']) ?>" alt="Imagem do perfil" style="padding-bottom: 40px;">

        <form action="#" style="max-width: 100%;">
            <section class="coluna">
                <div class="mb-3">
                    <label for="Alunos" class="form-label">Nome</label>
                    <input type="text" value="<?= htmlspecialchars($dados['Alunos']) ?>" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label for="Telefone" class="form-label">Telefone</label>
                    <input type="number" value="<?= htmlspecialchars($dados['telefone']) ?>" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" value="<?= htmlspecialchars($dados['email']) ?>" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label for="data_nascimento">Data de nascimento</label>
                    <input type="date" value="<?= htmlspecialchars($dados['nascimento']) ?>" class="form-control" disabled>
                </div>
                <div class="btn-group" role="group">
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off" <?= $dados['frequente'] ? 'checked' : '' ?>>
                    <label class="btn btn-outline-success" for="btncheck2">Frequência</label>
                </div>
            </section>
        </form>
    </div>
</main>
