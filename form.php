<html lang="pt-br"> <!-- idioma do site -->
<style> /*abre a estilização */
    form{ /* edita o formulário */
        padding-top: 100px; /*bota um espaçamento encima */
        display: flex; /*abre o flexbox */
        flex-direction: column; /* coloca a direção em tipo coluna */
        align-items: center; /* alinha no centro */
        gap: 8px; /* faz um espaçamento */
    } /* acabou a estilização*/
</style> <!-- fecha o style -->
<body> <!-- abre o body -->
    <main> <!-- abre o main -->
        <form action="./aluno-cadastrar.php" method="POST"> <!-- abre o formulario -->
            <h2>Cadastrar alunos</h2> <!-- texto escrito cadastrar alunos -->
            <input type="hidden" placeholder="ID." name="id"> <!-- coloca um input do ID escondido -->
            <input type="text" placeholder="Nome." name="nome"> <!-- bota um input para o nome -->
            <input type="text" placeholder="Telefone." name="telefone"> <!-- bota um input para o telefone -->
            <input type="texty" placeholder="E-mail." name="email"> <!-- bota um input pro email -->
            <input type="date" placeholder="Data de nascimento." name="nasc"> <!-- bota um input pra data de nascimento -->
            <div> <!-- abre a div -->
                <label>Frequente?</label> <!-- um texto perguntando se ele é frequente -->
                <input type="checkbox" name="frequente"> <!-- coloca um checkbox -->
            </div> <!-- fecha a div -->
            <input type="file" accept="image/*" name="img"> <!-- coloca um input par a imagem -->
            <input type="submit"> <!-- coloca um input pra enviar todas as informações -->
        </form> <!-- fecha o formulario -->
    </main> <!-- fecha o main -->
</body> <!-- fecha o body -->
</html> <!-- fecha o resto do html -->