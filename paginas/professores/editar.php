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
    <link rel="stylesheet" href="../../editar.css">
    <title>Professores<?php echo $professor['nome']; ?></title>
</head>
<body class="editarBox">
    <?php include "../../comp/nav.php"; ?>
    <div class="editarBox2">
    <h1>Editar Professor: <?php echo $professor['nome']; ?></h1>
    <div class="editarBox3">
    <form method="POST">
        <input type="hidden" name="id_professor" value="<?php echo $professor['id']; ?>">
        <div class="editarInput">
        <label>Professor:</label>
        <input type="text" name="nome" value="<?php echo $professor['nome']; ?>" required>
        </div>
        <div class="editarButton">
        <input type="submit" value="Editar Professor">
        </div>
    </form>
    </div>
    </div>
</body>
</html>