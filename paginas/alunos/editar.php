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
    <link rel="stylesheet" href="../../editar.css">
    <title>Alunos<?php echo $aluno['nome']; ?></title>
</head>
<body class="editarBox">
    <?php include "../../comp/nav.php"; ?>
    <div class="editarBox2">
    <h1>Editar Aluno: <?php echo $aluno['nome']; ?></h1>
    <div class="editarBox3">
    <form method="POST">
        <input type="hidden" name="id_aluno" value="<?php echo $aluno['id']; ?>">
        <div class="editarInput">
        <label>Aluno:</label>
        <input type="text" name="nome" value="<?php echo $aluno['nome']; ?>" required>
        </div>
        <div class="editarButton">
        <input type="submit" value="Editar aluno">
        </div>
    </form>
    </div>
    </div>
</body>
</html>