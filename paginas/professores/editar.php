<?php
    include "../../config/configs.php";
    include "../../funcs/professores.funcs.php"; 

    $id=$_GET['id'];
    $ligacao=ligarBD();

    $professor=obterProfessor($ligacao, $id); 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id=$_POST['id_professor'];
        $nome=$_POST['nome'];

        editarProfessor($ligacao, $id, $nome);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Professores<?php echo $professor['nome']; ?></title>
</head>
<body>
    <?php include "../../comp/nav.php"; ?>
    <h1>Editar Professores<?php echo $professor['nome']; ?></h1>

    <form method="POST">
        <input type="hidden" name="id_professor" value="<?php echo $professor['id']; ?>">
        <label>Professor:</label>
        <br>
        <input type="text" name="nome" value="<?php echo $professor['nome']; ?>" required>
        <br><br>
        <input type="submit" value="Editar Professor">
    </form>
</body>
</html>