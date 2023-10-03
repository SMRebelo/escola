<?php 
    include "../../config/configs.php";
    include "../../funcs/alunos.funcs.php";

    $ligacao = ligarBD();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero_id = $_POST['genero_id'];
        $curso_id = $_POST['curso_id'];
        $turma_id = $_POST['turma_id'];
        $inscricao_id = $_POST['inscricao_id'];


        inserirAluno($ligacao, $nome, $data_nascimento, $genero_id, $curso_id, $turma_id, $inscricao_id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../alunos.css">
    <title>inserir Aluno<?php echo $aluno["nome"];?></title>
</head>
    <body class="alunosBox">
        <?php include "../../comp/nav.php" ?>
        <div class="alunosBox2">
        <h1>Adicionar novo Aluno</h1>
        <div class="alunosBox3">
        <form method="POST">
        <div class="alunosInput">

            <label>Aluno:</label>      
           <input type="text" name="nome" required>  
           <label>Data de Nascimento:</label>      
           <input type="text" name="data_nascimento" required>
           <label>ID do Genero:</label>      
           <input type="text" name="genero_id" required>
           <label>ID do Curso:</label>      
           <input type="text" name="curso_id" required>
           <label>ID da Turma:</label>      
           <input type="text" name="turma_id" required>
           <label>ID da Inscrição:</label>      
           <input type="text" name="inscricao_id" required>      
            
        </div>
        <div class="alunosButton">
            <input type="submit" value="Adicionar Aluno">
        </div>
        </form>
        </div>
        </div>
    </body>
</html>
