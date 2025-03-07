<html lang="pt-br"> <!-- deixa a pagina em html -->
<style> /* abre para a estilização em css */
    form{ 
        padding-top: 100px; /* da aquele espaçamento de 100px massa na parte de cima */
        display: flex; /* coloca o flexbox pra organizar */
        flex-direction: column; /* organiza bonitinho em uma coluna */
        align-items: center; /* alinha horizontalmente os itens */
        gap: 8px; /* coloca um espaçamento de 8 px dentre os itens */
        
    }
    img{
        width: 400px; /* largura de 400px */
        height: 400px; /* altura de 400px */
    }
</style>  <!-- fecha a estilização em css -->
<?php //abre o PHP
$Id_aluno_alterar = $_GET['Id_aluno_alterar']; // Recebe o id do aluno da URL

var_dump($Id_aluno_alterar); //mostra o id do aluno pra depuração

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost'; //conexão no banco
$user = 'root'; //usa usuário própio
$password = ''; //bota a senha

$banco = new PDO($dsn, $user, $password); //puxa as informações

$select = 'SELECT tb_info_alunos.*, tb_alunos.Alunos FROM tb_info_alunos INNER JOIN tb_alunos ON tb_alunos.Id = tb_info_alunos.id_alunos WHERE tb_info_alunos.id_alunos='.$Id_aluno_alterar; //insere os valores postos na tabela   

$dados = $banco->query($select)->fetch(); //prepara uma consulta SQL e a executa
?> <!-- fecha o PHP -->
<body> <!-- abre o corpo do HTML -->
    <main> <!-- corpo principal do HTML -->
        <form action="./aluno-editar.php" method="POST"> <!-- formulário pra editar as informações do aluno -->
            <h2>Editar aluno</h2> <!-- titulo mostrando oq a pagina faz -->
            <img src="./assets/img/<?= $dados['img'] ?>" alt="imagem do aluno"> <!-- mostra a imagem do aluno -->
            <input type="hidden" placeholder="ID." name="id" value="<?= $dados['id'] ?>"> <!-- escondido, mas sem ele não enviaria o ID novo do aluno -->
            <input type="text" placeholder="Nome." name="nome" value="<?= $dados['Alunos'] ?>"> <!-- para mudar o nome do aluno -->
            <input type="text" placeholder="Telefone." name="telefone" value="<?= $dados['telefone'] ?>"> <!--  para mudar o telefone do aluno -->
            <input type="text" placeholder="E-mail." name="email" value="<?= $dados['email'] ?>"> <!-- para mudar o email do aluno -->
            <input type="date" placeholder="Data de nascimento." name="nasc" value="<?= $dados['nascimento'] ?>"> <!-- para mudar a data de nascimento do aluno -->
            <div> <!-- abre uma div para marcar a frequencia e/ou mandar a nova foto -->
                <label>Frequente?</label> <!-- pergunta se o aluno é frequente -->
                <input type="checkbox" name="frequente"> <!-- uma opção para marcar, se marcado ele é frequente -->
            </div> <!-- fecha a div -->
            <input type="file" accept="image/*" name="img">  <!-- colocar a imagem para mandar pro banco, mudando a imagem do aluno -->
            <input type="submit"> <!-- manda as informações para o banco -->
        </form> <!-- fecha o formulário -->
    </main> <!-- fecha o main -->
</body> <!-- fecha o body -->
</html> <!-- fecha o HTML -->