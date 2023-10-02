<?php
    include "../../config/configs.php";
    include "../../funcs/disciplinas.funcs.php"; 

    $id=$_GET['id'];
    $ligacao=ligarBD();

    $disciplina=obterDisciplina($ligacao, $id); 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id=$_POST['id_disciplina'];
        $nome=$_POST['nome'];

        editarDisciplina($ligacao, $id, $nome);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../editar.css">
    <title>Disciplinas<?php echo $disciplina['nome']; ?></title>
</head>
<body class="editarBox">
    <?php include "../../comp/nav.php"; ?>
    <div class="editarBox2">
    <h1>Editar Disciplina: <?php echo $disciplina['nome']; ?></h1>
    <div class="editarBox3">
    <form method="POST">
        <input type="hidden" name="id_disciplina" value="<?php echo $disciplina['id']; ?>">
        <div class="editarInput">
        <label>Disciplina:</label>
        <input type="text" name="nome" value="<?php echo $disciplina['nome']; ?>" required>
        </div>
        <div class="editarButton">
        <input type="submit" value="Editar Disciplina">
        </div>
    </form>
    </div>
    </div>
</body>
</html>