<?php 
    include "../../config/configs.php";
    include "../../funcs/alunos.funcs.php";

    $id = $_GET['id'];
    $ligacao = ligarBD();
    $aluno = obterAluno($ligacao, $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../alunos.css">
    <title>Alunos<?php echo $aluno["nome"];?></title>
</head>
<body class="alunoVerBox">
    <?php include "../../comp/nav.php" ?>    
    <h1>Aluno:  <?php echo $aluno["nome"];?></h1>
    <div class="alunoVerBox2">
    <div class="alunoVerBox3">
    <p>
        <label>ID: </label><?php echo $aluno['id']; ?><br>
    </p>
    </div>
    <div class="alunoVerBox4">
    <p>
        <label>Nome: </label><?php echo $aluno['nome']; ?><br>
    </p>
    <p>
        <label>D. Nascimento: </label><?php echo $aluno['data_nascimento']; ?><br>
    </p>
    <p>
        <label>Género: </label><?php echo $aluno['genero']; ?><br>
    </p>
    <p>
        <label>Curso: </label><?php echo $aluno['curso']; ?><br>
    </p>
    <p>
        <label>Turma: </label><?php echo $aluno['turma']; ?><br>
    </p>
    <p>
        <label>Inscrição: </label><?php echo $aluno['inscricao_id']; ?><br>
    </p>
    </div>
    </div>
</body>
</html>