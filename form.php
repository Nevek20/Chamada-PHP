<html lang="pt-br">
<style>
    form{
        padding-top: 100px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        
    }
</style>
<body>
    <main>
        <form action="./aluno-cadastrar.php" method="POST">
            <h2>Formulário</h2>
            <input type="text" placeholder="ID." name="id">
            <input type="text" placeholder="Nome." name="nome">
            <input type="text" placeholder="Telefone." name="telefone">
            <input type="texty" placeholder="E-mail." name="email">
            <input type="date" placeholder="Data de nascimento." name="nasc">
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