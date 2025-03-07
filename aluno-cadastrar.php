<?php //abre o php
echo '<h1>Cadastro de Aluno</h1>';  //escreve via HTML o Cadastro de alunos

$nomeFormulario = $_POST['nome']; //puxa a coluna nome

$dsn = 'mysql:dbname=bd_chamadinha;host=127.0.0.1'; //conexão no banco
$user = 'root';  //usa usuário própio
$password = ''; //bota a senha

$banco = new PDO($dsn, $user, $password); //puxa as informações

$insert = 'INSERT INTO tb_alunos (Alunos) VALUE (:Alunos)'; //insere os valores postos na tabela

$box = $banco->prepare($insert); //prepara uma consulta SQL

$box->execute([  //executa a consulta SQL
    ':Alunos' => $nomeFormulario //executa o nome
]); //fecha a consulta SQL

$id_aluno = $banco->lastInsertId(); //vai para o ultimo ID inserido

echo $id_aluno; //exibe para depuração 

$telFormulario = $_POST['telefone']; // Recebe os dados do telefone enviados pelo formulário via POST
$emailFormulario = $_POST['email']; // Recebe os dados do email enviados pelo formulário via POST
$nascFormulario = $_POST['nasc']; // Recebe os dados da data de nascimento enviados pelo formulário via POST
$frequenteFormulario = $_POST['frequente']; // Recebe os dados da frequencia enviados pelo formulário via POST
$id_aluno = $banco->lastInsertId(); // Recebe os dados do ID enviados pelo formulário via POST
$imgFormulario = $_POST['img']; // Recebe os dados da imagem enviados pelo formulário via POST

$insert = 'INSERT INTO tb_info_alunos (telefone, email, nascimento, frequente, id_alunos, img) VALUE (:telefone, :email, :nascimento, :frequente, :id_alunos, :img)'; // define a consulta SQL para inserir os dados adicionais

$box = $banco->prepare($insert); //prepara uma consulta SQL

$box->execute([ //executa a consulta SQL
    ':telefone' => $telFormulario, //executa o telefone
    ':email' => $emailFormulario, //executa o Email
    ':nascimento' => $nascFormulario, //executa a data de nascimento
    ':frequente' => $frequenteFormulario, //executa a frequência
    ':id_alunos' => $id_aluno, //executa o ID
    ':img' => $imgFormulario //executa a imagem
]); //fecha a consulta SQL