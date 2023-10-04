<?php
    include "../../config/configs.php";
    include "../../funcs/alunos.funcs.php"; 

    $id=$_GET['id'];
    $ligacao=ligarBD();

    $aluno=obterAluno($ligacao, $id); 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 

        $id=$_POST['id_aluno'];
        $nome=$_POST['nome'];
        $data_nascimento=$_POST['data_nascimento'];
        $genero_id=$_POST['genero_id'];
        $curso_id=$_POST['curso_id'];
        $turma_id=$_POST['turma_id'];
        $inscricao_id=$_POST['inscricao_id'];

        editarAluno($ligacao, $id, $nome, $data_nascimento, $genero_id, $curso_id, $turma_id, $inscricao_id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../alunos.css">
    <title>Alunos<?php echo $aluno['nome']; ?></title>
</head>
<body class="alunoEditarBox">
    <?php include "../../comp/nav.php"; ?>
    <div class="alunoEditarBox2">
    <h1>Editar Aluno: <?php echo $aluno['nome']; ?></h1>
    <div class="alunoEditarBox3">
    <form method="POST">
        <input type="hidden" name="id_aluno" value="<?php echo $aluno['id']; ?>">
        


        <div class="alunoEditarInput">
        <label>Aluno:</label>
        <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>" required>
        <label>Data Nascimento:</label>
        <input type="text" name="data_nascimento" value="<?php echo $aluno['data_nascimento']; ?>" required>
        <label>Género:</label>
        <input type="text" name="genero_id" value="<?php echo $aluno['genero_id']; ?>" required>
        <label>Curso:</label>
        <input type="text" name="curso_id" value="<?php echo $aluno['curso_id']; ?>" required>
        <label>Turma:</label>
        <input type="text" name="turma_id" value="<?php echo $aluno['turma_id']; ?>" required>
        <label>Inscrição:</label>
        <input type="text" name="inscricao_id" value="<?php echo $aluno['inscricao_id']; ?>" required>
        </div>

        <div class="alunoEditarButton">
        <input type="submit" value="Editar aluno">
        </div>
    </form>
    </div>
    </div>
</body>
</html>