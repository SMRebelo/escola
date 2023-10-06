<?php  
    include "../../config/configs.php";
    include "../../funcs/alunos.funcs.php";

    $ligacao = ligarBD();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero_id = $_POST['genero'];
        $curso_id = $_POST['curso'];
        $turma_id = $_POST['turma'];
        $inscricao_id = $_POST['inscricao'];


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

        <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_nascimento" name="data_nascimento" required>

    <label for="genero">Gênero:</label>
    <select id="genero" name="genero" required>
        <option value="1">Masculino</option>
        <option value="2">Feminino</option>
    </select>

    <label for="curso">Curso:</label>
    <select id="curso" name="curso" required>
        <option value="1">Informática</option>
        <option value="2">Ciências</option>
        <option value="3">Economia</option>
        <option value="4">Desporto</option>
    </select>

    <label for="turma">Turma:</label>
    <select id="turma" name="turma" required>
        <option value="1">666</option>
        <option value="2">999</option>
    </select>

    <label for="inscricao">Inscrição:</label>
    <select id="inscricao" name="inscricao" required>
        <option value="1">2023-06-15</option>
        <option value="2">2023-06-15</option>
        <option value="3">2023-06-15</option>
        <option value="4">2024-06-23</option>
    </select><br>    
            
        </div>
        <div class="alunosButton">
            <input type="submit" value="Adicionar Aluno">
        </div>
        </form>
        </div>
        </div>
    </body>
</html>
