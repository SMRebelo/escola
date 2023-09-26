<?php
    include "../../config/configs.php";
    include "../../funcs/cursos.funcs.php";  

    $id=$_GET['id'];
    $ligacao=ligarBD();

    $curso=obterCurso($ligacao, $id); 

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id=$_POST['id_curso'];
        $nome=$_POST['nome'];

        editarCurso($ligacao, $id, $nome);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Editar Cursos<?php echo $curso['nome']; ?></title>
</head>
<body>
    <?php include "../../comp/nav.php"; ?>
    <h1>Editar Cursos<?php echo $curso['nome']; ?></h1>

    <form method="POST">
        <input type="hidden" name="id_curso" value="<?php echo $curso['id']; ?>">
        <label>Curso:</label>
        <br>
        <input type="text" name="nome" value="<?php echo $curso['nome']; ?>" required>
        <br><br>
        <input type="submit" value="Editar Cursos">
    </form>
</body>
</html>