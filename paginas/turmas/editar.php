<?php
    include "../../config/configs.php";
    include "../../funcs/turmas.funcs.php"; 

    $id=$_GET['id'];
    $ligacao=ligarBD();

    $turma=obterTurma($ligacao, $id); 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id=$_POST['id_turma'];
        $nr_turma=$_POST['nr_turma'];

        editarTurma($ligacao, $id, $nr_turma);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../../editar.css">
    <title>Editar Turmas<?php echo $turma['nr_turma']; ?></title>
</head>
<body class="editarBox">
    <?php include "../../comp/nav.php"; ?>
    <div class="editarBox2">
    <h1>Editar Turmas<?php echo $turma['nr_turma']; ?></h1>
    <div class="editarBox3">
    <form method="POST">
        <input type="hidden" name="id_turma" value="<?php echo $turma['id']; ?>">
        <div class="editarInput">
        <label>Turma:</label>
        <input type="text" name="nr_turma" value="<?php echo $turma['nr_turma']; ?>" required>
        </div>
        <div class="editarButton">
        <input type="submit" value="Editar Turma">
        </div>
    </form>
    </div>
</div>
</body>
</html>